@props(['job'])

<div class="p-5 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-yellow-100 group transition-colors duration-300">
    <div>
        <x-employer-logo/>
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-2 group-hover:text-yellow-100 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm text-gray-500 mt-auto">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</div>
