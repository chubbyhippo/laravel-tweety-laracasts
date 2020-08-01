<x-app>
<header class="mb-6 relative">
    <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>

        <div>
            <a href="" class="rounded-full mr-2 shadow py-2 px-4 text-black text-xs">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
        </div>
    </div>
    <p class="text-sm">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt numquam excepturi cupiditate odio? Quas ex exercitationem minus, ullam facilis dolore nostrum sapiente, adipisci, possimus ipsam aut repudiandae nisi nobis natus?
    </p>
    <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2 absolute" style="width: 150px; left: calc(50% - 75px); top: 138px">
</header>

@include('_timeline', [
   'tweets' => $user->tweets
    ])
</x-app>