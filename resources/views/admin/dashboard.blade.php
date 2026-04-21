@extends('layouts.app')

@section('content')

<section style="padding:60px 0;">
    <div class="container">

        <!-- HEADER ROW -->
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:30px;">

            <h1 style="color:#0D2D8A;margin:0;">
                Admin Dashboard
            </h1>

            <!-- LOGOUT BUTTON -->
            <a href="{{ route('admin.logout') }}"
               style="background:#e11d48;color:white;padding:10px 15px;text-decoration:none;border-radius:6px;font-weight:600;">
                Logout
            </a>

        </div>

        <!-- STUDENTS -->
        <h2 style="margin-bottom:10px;">Student Applications</h2>

        <div style="overflow-x:auto; margin-bottom:50px;">
            <table style="width:100%; border-collapse:collapse;">
                <tr style="background:#0D2D8A;color:white;">
                    <th style="padding:10px;">Name</th>
                    <th>Age</th>
                    <th>School</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>

                @foreach($students as $student)
                <tr style="border-bottom:1px solid #ddd;">
                    <td style="padding:10px;">{{ $student->full_name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->school }}</td>
                    <td>{{ $student->class_grade }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                </tr>
                @endforeach
            </table>
        </div>

        <!-- PARTNERS -->
        <h2 style="margin-bottom:10px;">Partner Applications</h2>

        <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse;">
                <tr style="background:#2255CC;color:white;">
                    <th style="padding:10px;">Name</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Interest</th>
                </tr>

                @foreach($partners as $partner)
                <tr style="border-bottom:1px solid #ddd;">
                    <td style="padding:10px;">{{ $partner->full_name }}</td>
                    <td>{{ $partner->organization_role }}</td>
                    <td>{{ $partner->email }}</td>
                    <td>{{ $partner->phone }}</td>
                    <td>{{ $partner->interest_area }}</td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
</section>

@endsection