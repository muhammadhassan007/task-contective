<?php

namespace App\Http\Controllers;

use App\Contracts\LoggerInterface;
use Illuminate\Http\Request;
class LogController extends Controller
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;

        
    }

    public function logMessage(Request $request)
    {
        $message = $request->input('message', 'Default message');
        $this->logger->log($message);
        
        return response()->json(['status' => 'Message logged']);
    }

}
