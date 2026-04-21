@extends('layouts.admin')

@section('title', 'Student — ' . $student->full_name)
@section('page-title', 'Student Details')

@section('admin-content')

    <a href="{{ route('admin.dashboard') }}" class="back-link">
        ← Back to Dashboard
    </a>

    <div class="detail-card">

        <div class="detail-card__header">
            <div class="detail-card__avatar">🎓</div>
            <div>
                <h2>{{ $student->full_name }}</h2>
                <p>Student Application</p>
            </div>
        </div>

        <div class="detail-card__body">

            <div class="detail-row">
                <div class="detail-row__label">Full Name</div>
                <div class="detail-row__value">{{ $student->full_name }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Age</div>
                <div class="detail-row__value">{{ $student->age }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">School</div>
                <div class="detail-row__value">{{ $student->school }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Class / Grade</div>
                <div class="detail-row__value">{{ $student->class_grade }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Phone</div>
                <div class="detail-row__value">{{ $student->phone }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Email</div>
                <div class="detail-row__value">
                    <a href="mailto:{{ $student->email }}" style="color:var(--blue);">
                        {{ $student->email }}
                    </a>
                </div>
            </div>

            @if($student->created_at)
            <div class="detail-row">
                <div class="detail-row__label">Submitted</div>
                <div class="detail-row__value">{{ $student->created_at->format('d M Y, g:i A') }}</div>
            </div>
            @endif

        </div>

    </div>

    {{-- Delete action --}}
    <div style="margin-top:20px;">
        <form action="{{ route('student.delete', $student->id) }}" method="POST"
              onsubmit="return confirm('Permanently delete this student application?');"
              style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn-delete" type="submit" style="padding:10px 18px;font-size:0.9rem;">
                🗑 Delete Application
            </button>
        </form>
    </div>

@endsection
