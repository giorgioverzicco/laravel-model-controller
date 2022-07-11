<div class="bg-slate-700 bg-opacity-60 shadow-md backdrop-blur border border-slate-700 border-opacity-30 rounded-lg p-5 text-white">
    <h3 class="text-2xl font-semibold">{{ $movie->title }}</h3>
    <div class="flex justify-between text-lg mt-4">
        <p>{{ date('M d Y', strtotime($movie->date)) }}</p>
        <p>Vote: {{ $movie->vote }}</p>
    </div>
</div>