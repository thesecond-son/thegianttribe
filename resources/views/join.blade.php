@extends('layouts.app')

@section('content')

<section class="join-page">
    <div class="container">

        <h1>Join The Community</h1>

        {{-- SUCCESS MESSAGE --}}
        @if (session('success'))
            <div style="background:#22c55e;color:white;padding:12px;margin-bottom:20px;border-radius:6px;text-align:center;font-weight:600;">
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROR SUMMARY (optional fallback) --}}
        @if ($errors->any())
            <div style="background:red;color:white;padding:10px;margin-bottom:20px;border-radius:6px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p class="intro">
            Become part of a growing community of young people committed to excellence,
            growth, and making a meaningful impact.
        </p>

        <div class="join-grid">

            <!-- STUDENT FORM -->
            <div class="form-card">
                <h2>Join as a Student</h2>

                <form action="{{ route('student.store') }}" method="POST">
                    @csrf

                    <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}">
@error('full_name')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="number" name="age" placeholder="Age" value="{{ old('age') }}">
@error('age')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="text" name="school" placeholder="School" value="{{ old('school') }}">
@error('school')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="text" name="class_grade" placeholder="Class / Grade" value="{{ old('class_grade') }}">
@error('class_grade')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
@error('phone')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
@error('email')
    <small style="color:red;">{{ $message }}</small>
@enderror
                    <button type="submit">Submit</button>
                </form>
            </div>

            <!-- PARTNER FORM -->
            <div class="form-card">
                <h2>Partner With Us</h2>

                <form action="{{ route('partner.store') }}" method="POST">
                    @csrf

                    <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}">
@error('full_name')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="text" name="organization_role" placeholder="Organization / Role" value="{{ old('organization_role') }}">
@error('organization_role')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
@error('email')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
@error('phone')
    <small style="color:red;">{{ $message }}</small>
@enderror

<input type="text" name="interest_area" placeholder="Area of Interest" value="{{ old('interest_area') }}">
@error('interest_area')
    <small style="color:red;">{{ $message }}</small>
@enderror
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>

        <!-- VOLUNTEER -->
        <div class="volunteer">
            <h3>Want to Volunteer?</h3>
            <p>A separate link will be provided for volunteer applications.</p>
        </div>

    </div>
</section>

@endsection