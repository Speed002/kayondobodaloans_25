<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\ContentRangeUploadHandler;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;

class FileStoreController extends Controller
{
    public function __invoke(Request $request, $client)
    {
        // throw new Exception();

        $receiver = new FileReceiver(
            UploadedFile::fake()->createWithContent('file', $request->getContent()),
            $request,
            ContentRangeUploadHandler::class
        );

        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }
        $save = $receiver->receive();

        // get the user from the id passed in the $client in order for client to create a file
        $client = Client::find($client);

        if ($save->isFinished()) {
            $this->storeFile($request, $save->getFile(), $client);
        }

        $save->handler();
    }

    protected function storeFile(Request $request, UploadedFile $file, $client)
    {
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        // Fallback: If the extension is missing, try guessing it
        if (!$extension) {
            $extension = $file->guessExtension();
        }

        // Ensure a valid extension exists before saving
        if (!$extension) {
            throw new Exception("Unable to determine file extension.");
        }
        $filename = Str::uuid() . '.' . $extension;

        // Store the file
        $filePath = $file->storeAs('files/'.$client->id, $filename, 'public');

        // Save the file path in the database
        $client->files()->create([
            'file_path' => $filePath
        ]);
    }

}
