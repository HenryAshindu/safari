<x-layout>
    <x-page-heading>About Us</x-page-heading>

    <div class="flex items-center justify-center min-h-screen py-10 text-white bg-gray-900" style="background-image: url('https://images.unsplash.com/photo-1513708924815-c8ce3a9d40b1?ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80'); background-size: cover; background-position: center;">
        <div class="max-w-4xl p-10 text-center rounded-lg shadow-lg bg-black/70 backdrop-blur-sm">
            <h1 class="mb-6 text-5xl font-bold">Our Story</h1>
            <p class="mb-4 text-lg leading-relaxed">
                Welcome to ShoeStore, where style meets comfort! We started our journey with a passion for delivering premium footwear to people all around the world. Our mission is to provide a diverse range of high-quality shoes that reflect individuality, creativity, and timeless fashion.
            </p>
            <p class="mb-4 text-lg leading-relaxed">
                Over the years, we've curated a collection that caters to every occasion—be it formal events, casual outings, or sportswear. Each pair is handpicked to offer not only style but also maximum comfort and durability.
            </p>
            <p class="text-lg leading-relaxed">
                We are committed to sustainability and ethical production practices, ensuring that our shoes leave a minimal environmental footprint while delivering maximum value to our customers.
            </p>
            <a href="{{ url('/contact') }}" class="inline-block px-6 py-3 mt-8 font-semibold text-white bg-blue-600 rounded-lg hover:bg-blue-800">Get in Touch</a>
        </div>
    </div>

    <div class="py-10 bg-gray-100">
        <h2 class="mb-8 text-4xl font-bold text-center">Meet Our Team</h2>
        <div class="grid max-w-6xl grid-cols-1 gap-6 px-4 mx-auto sm:grid-cols-2 md:grid-cols-3">
            <div class="p-4 overflow-hidden text-center transition-transform duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl hover:scale-105">
                <img src="https://img.freepik.com/free-photo/portrait-expressive-young-man-wearing-formal-suit_273609-6942.jpg?t=st=1743949744~exp=1743953344~hmac=120090775b11aa08b8e225d70d39275f931c6396085d68f3aefdaff212c499c2&w=996" alt="Team Member 1" class="object-cover w-32 h-32 mx-auto rounded-full">
                <h3 class="mt-4 text-xl font-semibold">John Doe</h3>
                <p class="text-gray-600">CEO</p>
                <p class="text-sm text-gray-500">John leads the company with a vision for innovation and excellence, ensuring we stay ahead in the footwear industry.</p>
            </div>
            <div class="p-4 overflow-hidden text-center transition-transform duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl hover:scale-105">
                <img src="https://img.freepik.com/free-photo/african-female-soldier-jobs-career-portrait_53876-148048.jpg?t=st=1743949832~exp=1743953432~hmac=34f1832d58a53042148e07b4572dcb6b8b0a5e1bdcd9946ac0a516c38056d495&w=826" alt="Team Member 2" class="object-cover w-32 h-32 mx-auto rounded-full">
                <h3 class="mt-4 text-xl font-semibold">Jane Smith</h3>
                <p class="text-gray-600">Marketing Manager</p>
                <p class="text-sm text-gray-500">Jane crafts innovative marketing strategies to connect with our customers and expand our brand reach globally.</p>
            </div>
            <div class="p-4 overflow-hidden text-center transition-transform duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl hover:scale-105">
                <img src="https://img.freepik.com/free-photo/african-teenage-girl-portrait-happy-smiling-face_53876-146757.jpg?t=st=1743949880~exp=1743953480~hmac=487d664bc745f764fd6684d24da640ca4caae71be7cf8d007226c66e3917e9e6&w=826" alt="Team Member 3" class="object-cover w-32 h-32 mx-auto rounded-full">
                <h3 class="mt-4 text-xl font-semibold">Emily Johnson</h3>
                <p class="text-gray-600">Lead Designer</p>
                <p class="text-sm text-gray-500">Emily oversees the design process, ensuring every shoe reflects creativity, style, and functionality.</p>
            </div>
            <div class="p-4 overflow-hidden text-center transition-transform duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl hover:scale-105">
                <img src="https://img.freepik.com/free-photo/black-man-posing_23-2148171684.jpg?t=st=1743949941~exp=1743953541~hmac=9ed45dc7f48135c120c078f827e1474a0f44b716d853380263b032b06863ab2e&w=740" alt="Team Member 4" class="object-cover w-32 h-32 mx-auto rounded-full">
                <h3 class="mt-4 text-xl font-semibold">Michael Brown</h3>
                <p class="text-gray-600">Operations Manager</p>
                <p class="text-sm text-gray-500">Michael ensures smooth day-to-day operations, optimizing processes for efficiency and quality.</p>
            </div>
            <div class="p-4 overflow-hidden text-center transition-transform duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl hover:scale-105">
                <img src="https://img.freepik.com/free-photo/smiley-african-woman-with-golden-earrings_23-2148747979.jpg?t=st=1743949991~exp=1743953591~hmac=d982a45eab37ec9caa263e25216067af6f86b83294e69a26efcac75925229c1c&w=740" alt="Team Member 5" class="object-cover w-32 h-32 mx-auto rounded-full">
                <h3 class="mt-4 text-xl font-semibold">Sophia Davis</h3>
                <p class="text-gray-600">HR Manager</p>
                <p class="text-sm text-gray-500">Sophia manages our team, fostering a positive work environment and ensuring employee satisfaction.</p>
            </div>
            <div class="p-4 overflow-hidden text-center transition-transform duration-300 bg-white rounded-lg shadow-lg hover:shadow-2xl hover:scale-105">
                <img src="https://img.freepik.com/free-photo/people-lifestyle_273609-5661.jpg?t=st=1743950055~exp=1743953655~hmac=2b9312de4d439214462fbde44507f96a87a1ad7d0070222398059dd6d9eaabfd&w=996" alt="Team Member 6" class="object-cover w-32 h-32 mx-auto rounded-full">
                <h3 class="mt-4 text-xl font-semibold">William Wilson</h3>
                <p class="text-gray-600">Finance Manager</p>
                <p class="text-sm text-gray-500">William oversees financial planning and budgeting, ensuring the company's financial health and sustainability.</p>
            </div>
        </div>
    </div>
</x-layout>
