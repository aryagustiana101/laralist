<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 mx-4 md:mx-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 border-b border-gray-200">
                
                    <div class="mt-8 text-2xl">
                        Hello, {{ Auth::user()->name }}!
                    </div>
                
                    <div class="mt-6 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quos rem, facere dignissimos cum fugiat tempora quas sunt pariatur voluptatum, quidem, adipisci aperiam aut quibusdam at nemo nihil architecto facilis in molestiae assumenda est nam esse? Itaque consequatur porro incidunt quam sed quisquam quas sunt, eligendi quae quia perspiciatis atque sapiente cupiditate, voluptate eius suscipit laboriosam dicta fuga nulla sequi! Aliquid eum asperiores non reprehenderit explicabo consequuntur, laborum ratione dolore dolorum sed ut fugit doloremque eveniet rerum? Ullam quidem blanditiis ipsa in deserunt nulla quibusdam sint voluptatibus nobis fugiat architecto illum mollitia, enim assumenda odio nostrum laudantium earum numquam! Dolor.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
