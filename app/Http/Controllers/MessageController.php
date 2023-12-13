<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.message.index', [
            'messages' => ContactMessage::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = ContactMessage::create($request->all());
        Mail::to('abrordev2004@gmail.com')->send(new MessageMail($message));

        return redirect('/#contact')->with('success', 'Message sent successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ContactMessage::findOrFail($id)->delete();
        return redirect()
            ->route('admin.message.index')
            ->with('success', 'Message deleted successfully');
    }
}
