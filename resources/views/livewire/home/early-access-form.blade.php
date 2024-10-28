<?php

use function Livewire\Volt\{state};
use App\Models\BetaUser;

state(['name' => '', 'email' => '']);

$submit = function () {
    $this->validate([
        'name' => 'required|min:2',
        'email' => 'required|email|unique:beta_users,email',
    ]);

    $betaUser = BetaUser::create([
        'name' => $this->name,
        'email' => $this->email,
    ]);

    session()->flush('success', 'Thank you ' . $betaUser->name . ' for joining the early access list! We\'ll be in touch soon.');
};

?>

<form wire:submit="submit" class="space-y-4">
    @if (session('success'))
        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    <div>
        <label for="name" class="block text-left text-gray-700 font-semibold">Name:</label>
        <input type="text" id="name" wire:model="name" required placeholder="Your name"
            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="email" class="block text-left text-gray-700 font-semibold">Email:</label>
        <input type="email" id="email" wire:model="email" required placeholder="Your email"
            class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black">
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit"
        class="w-full py-3 bg-fluensy-orange text-white font-semibold rounded-lg hover:bg-orange-400 delay-300 focus:outline-none focus:ring-2 focus:ring-green-500">
        Join Early Access
    </button>
</form>
