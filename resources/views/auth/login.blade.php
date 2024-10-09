<x-layout>
    <x-page-heading>Login</x-page-heading>

    <x-forms.form>
        <form action="/login" method="POST" enctype="multipart/form-data">
            <x-forms.input label="Email" name="email" type="email"></x-forms.input>
            <x-forms.input label="Password" name="password"></x-forms.input>

            <x-forms.button>Log In</x-forms.button>
        </form>
    </x-forms.form>
</x-layout>
