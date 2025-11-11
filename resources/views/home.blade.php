@extends('layouts.app')

@section('page-header')
    <x-tabler::page-header title="Welcome to Tabler UI" subtitle="Laravel Blade component integration" />
@endsection

@section('content')
    <x-tabler::cards.card>
        <x-tabler::cards.header>
            <x-slot:title>Users</x-slot:title>
            <x-slot:subtitle>List of all registered users</x-slot:subtitle>
        </x-tabler::cards.header>
        <x-tabler::table card vcenter>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Registered</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td class="text-secondary">
                            <a href="mailto:{{ $user->email }}" class="text-reset">{{ $user->email }}</a>
                        </td>
                        <td class="text-secondary">{{ $user->created_at->diffForHumans() }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-muted text-center">No users found</td>
                    </tr>
                @endforelse
            </tbody>
        </x-tabler::table>
        @if ($users->hasPages())
            <x-tabler::cards.footer>
                <div class="d-flex align-items-center">
                    <div>
                        {{ $users->onEachSide(0)->links('tabler::pagination.simple') }}
                    </div>
                    <div class="ms-auto">
                        {{ $users->links() }}
                    </div>
                </div>
            </x-tabler::cards.footer>
        @endif
    </x-tabler::cards.card>
    <x-tabler::cards.card>
        <x-tabler::cards.body>
            <x-tabler::pagination :paginator="$users" prevTitle="Previous" nextTitle="Next" />
        </x-tabler::cards.body>
    </x-tabler::cards.card>
@endsection
