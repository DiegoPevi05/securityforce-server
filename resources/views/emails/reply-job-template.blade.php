@component('mail::message')
# Una persona quiere trabajar con Nosotros

Has recibido una nueva solicitud de {{ $name }}:

- Nombre: {{ $name }}
- Correo Electronico: {{ $email }}
- Celular o Telefono: {{ $phone }}
- City: {{ $city }}

@endcomponent
