@extends('layouts.app')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="page-hero__dots"></div>
    <div class="container page-hero__inner">
        <span class="section-label">Get Started</span>
        <h1>Join the Community</h1>
        <p>
            Become part of a growing movement of young people committed to
            excellence, growth, and making a meaningful impact in the world.
        </p>
    </div>
</section>

{{-- ============================================================
     FORMS
============================================================ --}}
<section class="section section--sky">
    <div class="container">

        {{-- Alerts --}}
        @if (session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <strong>Please fix the following:</strong>
                <ul style="margin-top:8px;padding-left:16px;display:flex;flex-direction:column;gap:4px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="join-grid">

            {{-- STUDENT FORM --}}
            <div class="form-card fade-up delay-1">

                <div class="form-card__header">
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:4px;">
                        <div class="icon-box icon-box-navy" style="margin-bottom:0;width:44px;height:44px;font-size:1.2rem;">🎓</div>
                        <h2>Join as a Student</h2>
                    </div>
                    <p>Fill in your details to become part of The Giant Tribe Community.</p>
                </div>

                <form action="{{ route('student.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label" for="student_name">Full Name</label>
                        <input class="form-input @error('full_name') is-error @enderror"
                               type="text" id="student_name" name="full_name"
                               placeholder="Enter your full name"
                               value="{{ old('full_name') }}">
                        @error('full_name')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="age">Age</label>
                        <input class="form-input @error('age') is-error @enderror"
                               type="number" id="age" name="age"
                               placeholder="Your age"
                               value="{{ old('age') }}" min="5" max="35">
                        @error('age')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="school">School</label>
                        <input class="form-input @error('school') is-error @enderror"
                               type="text" id="school" name="school"
                               placeholder="Name of your school"
                               value="{{ old('school') }}">
                        @error('school')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="class_grade">Class / Grade</label>
                        <input class="form-input @error('class_grade') is-error @enderror"
                               type="text" id="class_grade" name="class_grade"
                               placeholder="e.g. SS2, 100 Level, Year 3"
                               value="{{ old('class_grade') }}">
                        @error('class_grade')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="student_phone">Phone Number</label>
                        <input class="form-input @error('phone') is-error @enderror"
                               type="text" id="student_phone" name="phone"
                               placeholder="+234 800 000 0000"
                               value="{{ old('phone') }}">
                        @error('phone')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="student_email">Email Address</label>
                        <input class="form-input @error('email') is-error @enderror"
                               type="email" id="student_email" name="email"
                               placeholder="your@email.com"
                               value="{{ old('email') }}">
                        @error('email')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-navy btn-lg" style="width:100%;justify-content:center;margin-top:8px;">
                        Join as a Student &rarr;
                    </button>

                </form>
            </div>

            {{-- PARTNER FORM --}}
            <div class="form-card fade-up delay-2">

                <div class="form-card__header">
                    <div style="display:flex;align-items:center;gap:12px;margin-bottom:4px;">
                        <div class="icon-box icon-box-gold" style="margin-bottom:0;width:44px;height:44px;font-size:1.2rem;">🤝</div>
                        <h2>Partner With Us</h2>
                    </div>
                    <p>Schools, organizations, and individuals can partner with TGT to expand our impact.</p>
                </div>

                <form action="{{ route('partner.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label" for="partner_name">Full Name</label>
                        <input class="form-input @error('full_name') is-error @enderror"
                               type="text" id="partner_name" name="full_name"
                               placeholder="Enter your full name"
                               value="{{ old('full_name') }}">
                        @error('full_name')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="organization_role">Organization / Role</label>
                        <input class="form-input @error('organization_role') is-error @enderror"
                               type="text" id="organization_role" name="organization_role"
                               placeholder="e.g. Principal, NGO Director, Sponsor"
                               value="{{ old('organization_role') }}">
                        @error('organization_role')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="partner_email">Email Address</label>
                        <input class="form-input @error('email') is-error @enderror"
                               type="email" id="partner_email" name="email"
                               placeholder="your@email.com"
                               value="{{ old('email') }}">
                        @error('email')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="partner_phone">Phone Number</label>
                        <input class="form-input @error('phone') is-error @enderror"
                               type="text" id="partner_phone" name="phone"
                               placeholder="+234 800 000 0000"
                               value="{{ old('phone') }}">
                        @error('phone')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="interest_area">Area of Interest / Support</label>
                        <input class="form-input @error('interest_area') is-error @enderror"
                               type="text" id="interest_area" name="interest_area"
                               placeholder="e.g. Mentorship, Sponsorship, School Partnership"
                               value="{{ old('interest_area') }}">
                        @error('interest_area')
                            <span class="form-error">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Spacer to align button with student form --}}
                    <div style="height:74px;"></div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width:100%;justify-content:center;margin-top:8px;color:var(--navy-dark);">
                        Submit Partnership Request &rarr;
                    </button>

                </form>
            </div>

        </div>

        {{-- VOLUNTEER CTA --}}
        <div class="volunteer-cta fade-up" style="margin-top:40px;">
            <div style="font-size:2rem;margin-bottom:12px;">🙋</div>
            <h3>Want to Volunteer?</h3>
            <p>
                We're always looking for passionate people to join our volunteer team.
                A separate link will be provided and shared for volunteer applications.
            </p>
            <span class="tag tag-gold" style="margin-top:4px;">Coming Soon</span>
        </div>

    </div>
</section>

@endsection
