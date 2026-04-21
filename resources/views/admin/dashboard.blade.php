@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('admin-content')

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="alert alert-success">
            ✓ {{ session('success') }}
        </div>
    @endif

    {{-- ---- STATS ---- --}}
    <div class="stats-grid">

        <div class="stat-card">
            <div class="stat-card__icon stat-card__icon--blue">🎓</div>
            <div>
                <div class="stat-card__num">{{ $studentCount }}</div>
                <div class="stat-card__label">Student Applications</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card__icon stat-card__icon--gold">🤝</div>
            <div>
                <div class="stat-card__num">{{ $partnerCount }}</div>
                <div class="stat-card__label">Partner Applications</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-card__icon stat-card__icon--blue">📋</div>
            <div>
                <div class="stat-card__num">{{ $studentCount + $partnerCount }}</div>
                <div class="stat-card__label">Total Applications</div>
            </div>
        </div>

    </div>

    {{-- ---- STUDENTS TABLE ---- --}}
    <div id="students">

        <div class="admin-section-title">
            <h2>🎓 Student Applications</h2>
        </div>

        <form method="GET" class="search-bar" action="{{ route('admin.dashboard') }}#students">
            <input type="text" name="student_search"
                   placeholder="Search by name, school, or email…"
                   value="{{ request('student_search') }}">
            <button type="submit">Search</button>
        </form>

        <div class="table-wrap">
            <div style="overflow-x:auto;">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>School</th>
                            <th>Class</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $student)
                            <tr>
                                <td>{{ $student->full_name }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->school }}</td>
                                <td>{{ $student->class_grade }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="actions">

                                    <a href="{{ route('student.view', $student->id) }}" class="btn-view">
                                        View
                                    </a>

                                    <form action="{{ route('student.delete', $student->id) }}" method="POST"
                                          onsubmit="return confirm('Delete this student application?');"
                                          style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete" type="submit">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr class="empty-row">
                                <td colspan="7">
                                    <div style="display:flex;flex-direction:column;align-items:center;gap:8px;padding:20px 0;">
                                        <span style="font-size:2rem;">📭</span>
                                        No student applications yet
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- ---- PARTNERS TABLE ---- --}}
    <div id="partners">

        <div class="admin-section-title">
            <h2>🤝 Partner Applications</h2>
        </div>

        <div class="table-wrap">
            <div style="overflow-x:auto;">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Organization / Role</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Interest Area</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($partners as $partner)
                            <tr>
                                <td>{{ $partner->full_name }}</td>
                                <td>{{ $partner->organization_role }}</td>
                                <td>{{ $partner->email }}</td>
                                <td>{{ $partner->phone }}</td>
                                <td>{{ $partner->interest_area }}</td>
                                <td class="actions">

                                    <a href="{{ route('partner.view', $partner->id) }}" class="btn-view">
                                        View
                                    </a>

                                    <form action="{{ route('partner.delete', $partner->id) }}" method="POST"
                                          onsubmit="return confirm('Delete this partner application?');"
                                          style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete" type="submit">Delete</button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                            <tr class="empty-row">
                                <td colspan="6">
                                    <div style="display:flex;flex-direction:column;align-items:center;gap:8px;padding:20px 0;">
                                        <span style="font-size:2rem;">📭</span>
                                        No partner applications yet
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
