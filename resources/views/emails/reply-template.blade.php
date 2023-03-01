@component('mail::message')
# Nuevo Formulario de Contacto

Has recibido una nueva solicitud de {{ $name }}:

- Nombre: {{ $name }}
- Correo Electronico: {{ $email }}
- Celular o Telefono: {{ $phone }}
- Compañia: {{ $company }}
- Cargo: {{ $charge }}

@endcomponent
