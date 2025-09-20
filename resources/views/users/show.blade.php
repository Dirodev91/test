@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>User Details</h3>
                <div>
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">Back to List</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">ID:</label>
                            <p class="form-control-plaintext">{{ $user->id }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name:</label>
                            <p class="form-control-plaintext">{{ $user->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email:</label>
                            <p class="form-control-plaintext">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Verified:</label>
                            <p class="form-control-plaintext">
                                @if($user->email_verified_at)
                                    <span class="badge bg-success">Verified</span>
                                    <small class="text-muted">({{ $user->email_verified_at->format('Y-m-d H:i') }})</small>
                                @else
                                    <span class="badge bg-warning">Not Verified</span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Created At:</label>
                            <p class="form-control-plaintext">{{ $user->created_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Updated At:</label>
                            <p class="form-control-plaintext">{{ $user->updated_at->format('Y-m-d H:i:s') }}</p>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-2 mt-3">
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit User</a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete User</button>
                    </form>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection