@extends('layouts.admin')

@section('title', 'Partner — ' . $partner->full_name)
@section('page-title', 'Partner Details')

@section('admin-content')

    <a href="{{ route('admin.dashboard') }}" class="back-link">
        ← Back to Dashboard
    </a>

    <div class="detail-card">

        <div class="detail-card__header">
            <div class="detail-card__avatar">🤝</div>
            <div>
                <h2>{{ $partner->full_name }}</h2>
                <p>Partner Application</p>
            </div>
        </div>

        <div class="detail-card__body">

            <div class="detail-row">
                <div class="detail-row__label">Full Name</div>
                <div class="detail-row__value">{{ $partner->full_name }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Organization / Role</div>
                <div class="detail-row__value">{{ $partner->organization_role }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Email</div>
                <div class="detail-row__value">
                    <a href="mailto:{{ $partner->email }}" style="color:var(--blue);">
                        {{ $partner->email }}
                    </a>
                </div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Phone</div>
                <div class="detail-row__value">{{ $partner->phone }}</div>
            </div>

            <div class="detail-row">
                <div class="detail-row__label">Interest Area</div>
                <div class="detail-row__value">{{ $partner->interest_area }}</div>
            </div>

            @if($partner->created_at)
            <div class="detail-row">
                <div class="detail-row__label">Submitted</div>
                <div class="detail-row__value">{{ $partner->created_at->format('d M Y, g:i A') }}</div>
            </div>
            @endif

        </div>

    </div>

    {{-- Delete action --}}
    <div style="margin-top:20px;">
        <form action="{{ route('partner.delete', $partner->id) }}" method="POST"
              onsubmit="return confirm('Permanently delete this partner application?');"
              style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn-delete" type="submit" style="padding:10px 18px;font-size:0.9rem;">
                🗑 Delete Application
            </button>
        </form>
    </div>

@endsection
