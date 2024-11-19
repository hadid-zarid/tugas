<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto py-6 px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">My Portfolio</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#about" class="text-gray-600 hover:text-blue-500">About</a></li>
                    <li><a href="#projects" class="text-gray-600 hover:text-blue-500">Projects</a></li>
                    <li><a href="#contact" class="text-gray-600 hover:text-blue-500">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="bg-gray-900 text-white py-20 text-center">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold" data-aos="fade-up">Hello, I'm Hadid Zarid Nawfal</h2>
            <p class="mt-4 text-lg" data-aos="fade-up" data-aos-delay="200">A Passionate Developer and Designer</p>
            <a href="#projects" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-600" data-aos="fade-up" data-aos-delay="400">Explore My Work</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Gambar -->
            <div class="md:w-1/2 text-center mb-8 md:mb-0" data-aos="fade-right">
                <img 
                src="{{ asset('aset/foto.png') }}" 
                alt="My Photo" 
                class="rounded-full shadow-lg mx-auto w-48 h-48 object-cover"
            />            
            </div>
            
            <!-- Deskripsi -->
            <div class="md:w-1/2 text-center md:text-left" data-aos="fade-left" data-aos-delay="200">
                <h2 class="text-3xl font-bold mb-6">About Me</h2>
                <div class="text-gray-600 max-w-lg mx-auto md:mx-0 space-y-4">
                    <p>
                        Perkenalkan nama saya Hadid Zarid Nawfal. Saya biasa dipanggil Hadid. Saat ini saya sedang menempuh pendidikan di Politeknik Caltex Riau, jurusan Teknik Informatika.
                    </p>
                    <p>
                        Selain belajar, saya memiliki hobi fotografi dan editing. Saya senang mengabadikan momen-momen indah dan kemudian mengeditnya menjadi lebih menarik. Saya juga suka bereksperimen dengan berbagai teknik fotografi dan editing untuk menghasilkan karya yang kreatif.
                    </p>
                    <p>
                        Saya orang yang mudah bergaul dan suka mencoba hal-hal baru. Saya juga senang belajar dan selalu ingin mengembangkan diri.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    


    <!-- Projects Section -->
    <section id="projects" class="bg-gray-100 py-20">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10" data-aos="fade-left">My Projects photos </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project Card -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in">
                    <img src="{{ asset('aset/foto1.png') }}"  alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Project 1</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('aset/foto2.png') }}" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Project 2</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('aset/foto3.png') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Project 3</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('aset/foto4.png') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Project 4</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('aset/foto5.png') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Project 5</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('aset/foto6.png') }}" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold">Project 6</h3>
                        <p class="text-gray-600 mt-2">A brief description of the project goes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="spanduk" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10" data-aos="fade-up">Project Spanduk</h2>
            <!-- Spanduk -->
            <div class="relative inline-block" data-aos="fade-up" data-aos-delay="200">
                <!-- Gambar Spanduk -->
                <img 
                    src="{{ asset('aset/spanduk.png') }}" 
                    alt="Spanduk Class Meeting" 
                    class="w-full max-w-4xl mx-auto rounded-lg shadow-lg"
                >
                <!-- Dimensi Spanduk -->
                
            <!-- Warna Representasi -->
            <div class="mt-10 flex justify-center space-x-6" data-aos="fade-up" data-aos-delay="400">
                <div class="w-20 h-6 bg-red-500 rounded"></div>
                <div class="w-20 h-6 bg-yellow-500 rounded"></div>
                <div class="w-20 h-6 bg-blue-500 rounded"></div>
            </div>
        </div>
    </section>
    

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6" data-aos="fade-up">Get In Touch</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-6" data-aos="fade-up" data-aos-delay="200">
                jika ada pertanyaan tentang pekerjaan saya atau yang lainnya kontak aja di bawah ini 
            </p>
            <div class="flex justify-center items-center gap-6 mb-6" data-aos="fade-up" data-aos-delay="300">
                <!-- Email Icon -->
                <a href="mailto:hadidzarid1215@gmail.com" class="text-gray-600 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m-2 0a9 9 0 0118 0m-9-9a9 9 0 00-9 9m9-9v18" />
                    </svg>
                </a>
                <!-- Phone Icon -->
                <a href="tel:08996620105105" class="text-gray-600 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.25V9.75M3 14a4.001 4.001 0 014-4h8a4.001 4.001 0 014 4v0M5 14a2.001 2.001 0 012-2h8a2.001 2.001 0 012 2v0M5 14h10" />
                    </svg>
                </a>
                <!-- Instagram Icon -->
                <a href="https://www.instagram.com/ditt.1214" target="_blank" class="text-gray-600 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.36 5.64a1.5 1.5 0 010 2.12m1.41 1.42a2 2 0 010 2.83m-2.12 2.12a1.5 1.5 0 01-2.12 0m-4.83-9.71a6 6 0 11-8.49 8.48" />
                    </svg>
                </a>
            </div>
            <a href="mailto:hadidzarid1215@gmail.com" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-600" data-aos="fade-up" data-aos-delay="400">Email Me</a>
        </div>
    </section>
    
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-6">
        <p>&copy; 2024 Hadid Zarid Nawfal.</p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
