<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Partner;

class AdminController extends Controller
{
    // LOGIN PAGE
    public function login()
    {
        return view('admin.login');
    }

    // HANDLE LOGIN
    public function authenticate(Request $request)
    {
        if (
            $request->email === 'admin@gmail.com' &&
            $request->password === 'password123'
        ) {
            $request->session()->put('is_admin', true);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    // DASHBOARD
    public function dashboard(Request $request)
    {
        $studentSearch = $request->student_search;
        $partnerSearch = $request->partner_search;

        $students = Student::when($studentSearch, function ($query) use ($studentSearch) {
            $query->where('full_name', 'like', "%$studentSearch%")
                  ->orWhere('email', 'like', "%$studentSearch%");
        })->latest()->paginate(10)->withQueryString();

        $partners = Partner::when($partnerSearch, function ($query) use ($partnerSearch) {
            $query->where('full_name', 'like', "%$partnerSearch%")
                  ->orWhere('email', 'like', "%$partnerSearch%");
        })->latest()->paginate(10)->withQueryString();

        $studentCount = Student::count();
        $partnerCount = Partner::count();

        return view('admin.dashboard', compact(
            'students',
            'partners',
            'studentCount',
            'partnerCount'
        ));
    }

    // LOGOUT
    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        return redirect()->route('admin.login');
    }

    // DELETE STUDENT
    public function deleteStudent($id)
    {
        Student::findOrFail($id)->delete();
        return back()->with('success', 'Student deleted successfully');
    }

    // DELETE PARTNER
    public function deletePartner($id)
    {
        Partner::findOrFail($id)->delete();
        return back()->with('success', 'Partner deleted successfully');
    }

    // VIEW STUDENT
    public function viewStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student-view', compact('student'));
    }

    // VIEW PARTNER
    public function viewPartner($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner-view', compact('partner'));
    }
}