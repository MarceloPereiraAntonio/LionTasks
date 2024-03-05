<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-blue-300 transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>


