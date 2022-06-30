<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>Comunidad Mudra</title>

  <!-- Metatags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Assets + Tailwind -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

  <style type="text/tailwindcss">
    @layer utilities {
      .font-inter {
        font-family: 'Inter', sans-serif;
      }
      .font-montserrat {
        font-family: 'Montserrat', sans-serif;
      }
    }
  </style>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
  <header class="relative bg-[url('images/background.png')] bg-cover min-h-screen min-w-full py-20 flex items-center">
    <div class="container mx-auto">
      
      <div class="grid md:grid-cols-[auto_440px]">
        <div class="text-white pt-6">
          <div class="flex items-center mb-8">
            <div class="mr-4">
              <img src="/images/logo.png">
            </div>

            <h1 class="font-montserrat text-[38px] font-semibold">
              Comunidad Mudra
            </h1>
          </div>

          <h2 class="font-inter text-2xl mb-7">Suscribite para disfrutar de <b>beneficios exclusivos.</b></h2>
          <hr class="border-0 w-4 h-[2px] bg-white/40 mb-8">
          <p class="font-inter text-xl font-medium mb-8">¡Es muy fácil!</p>
        
          <ol class="list-none p-0 m-0 font-inter text-lg grid gap-11">
            <li>Completá el formulario con tus datos.</li>
            <li>Recibí la credencial por mail.</li>
            <li>Guardala en tu celular ¡Y listo! Ya podés disfrutar de los beneficios.</li>
          </ol>
        </div>

        <div>
          <form class="bg-white py-10 px-7 rounded-lg shadow">
            <h3 class="font-inter text-lg font-medium mb-7">Cargá tus datos para recibir tu credencial</h3>
            
            <div class="grid gap-5 mb-8">
              <div>
                <label for="name" class="font-inter text-sm mb-[10px] block">Nombre y Apellido</label>
                <input type="text" class="text-[#1E1E1E] bg-[#E5E5E5] font-medium border-0 rounded-lg w-full block" id="name">
              </div>

              <div>
                <label for="name" class="font-inter text-sm mb-[10px] block">DNI</label>
                <input type="number" class="text-[#1E1E1E] bg-[#E5E5E5] font-medium border-0 rounded-lg w-full block" id="name">
              </div>

              <div>
                <label for="name" class="font-inter text-sm mb-[10px] block">Correo electrónico</label>
                <input type="email" class="text-[#1E1E1E] bg-[#E5E5E5] font-medium border-0 rounded-lg w-full block" id="name">
              </div>

              <div>
                <label for="name" class="font-inter text-sm mb-[10px] block">Teléfono</label>
                <input type="tel" class="text-[#1E1E1E] bg-[#E5E5E5] font-medium border-0 rounded-lg w-full block" id="name">
              </div>
            </div>

            <div>
              <button type="submit" class="text-[#1E1E1E] bg-[#B8D9E3] font-inter font-semibold uppercase py-3 rounded-lg w-full">
                Enviar
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </header>

</body>
</html>
