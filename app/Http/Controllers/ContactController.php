<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Contact;
 
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
  
        return view('contact.index', compact('contacts'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create($request->all());
 
        return redirect()->route('contact')->with('success', 'Kontak Berhasil Ditambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts = Contact::findOrFail($id);
  
        return view('contact.show', compact('contacts'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacts = Contact::findOrFail($id);
  
        return view('contact.edit', compact('contacts'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contacts = Contact::findOrFail($id);
  
        $contacts->update($request->all());
  
        return redirect()->route('contact')->with('success', 'Kontak Behasil Diupdate!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacts = Contact::findOrFail($id);
  
        $contacts->delete();
  
        return redirect()->route('contact')->with('success', 'Kontak Telah Behasil Di Hapus!');
    }

}