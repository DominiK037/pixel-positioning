@props(['job'])

<div class="p-5 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-yellow-100 group transition-colors duration-300">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8">
        <h3 class="group-hover:text-yellow-100 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3>
        <p class="mt-4 text-sm">{{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="42"/>
    </div>
</div>
