<x-profile-preferences :post="$stories">
    @section('preferences')
        <div class="container_profile_about mt-8 flex flex-col gap-5">
            <section class="connection-section flex flex-col gap-2">
                <h1 class="text-xl font-semibold">Connection</h1>
                <div class="connection-profile flex gap-2 items-center">
                    <p class="px-4 py-[.45rem] font-medium bg-slate-200 rounded-full text-sm">12.489 Followers</p>
                    <p class="px-4 py-[.45rem] font-medium bg-slate-200 rounded-full text-sm">472 Following</p>
                </div>
            </section>
            <section class="about-section flex flex-col gap-2">
                <h1 class="text-xl font-semibold">About</h1>
                <p class="text-justify font-light ">Lorem ipsum dolor sit amet. Ea neque rerum et facilis nulla ex distinctio
                    soluta qui
                    voluptas nesciunt
                    est dolor unde et earum dolore. Qui impedit saepe non aperiam explicabo hic maiores esse et modi rerum.
                    Sed amet voluptas qui culpa atque ab perferendis molestiae sed facere galisum aut provident earum. Ea
                    inventore velit aut iste autem id.
                </p>
            </section>
            <section class="information-section flex flex-col gap-2">
                <h1 class="text-xl font-semibold">Contact Information</h1>
                <div class="email-contact flex items-center gap-2">
                    <p class="font-medium">Email:</p>
                    <a class="font-light" href="">makeyouridea@agency.com</a>
                </div>
                <div class="website-contact flex items-center gap-2">
                    <p class="font-medium">Website:</p>
                    <a class="font-light" href="">makeyouridea.id</a>
                </div>
            </section>
            <p class="text-sm font-medium text-slate-400">Joined since 2024.</p>
        </div>
    @endsection
</x-profile-preferences>
