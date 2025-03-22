# Nombre del Proyecto

> Vistazo App

## Tabla de Contenidos

- [Descripción del Proyecto](#descripción-del-proyecto)
- [Tecnologías Usadas](#tecnologías-usadas)
- [Estructura del Proyecto](#estructura-del-proyecto)
- [Contribuir](#contribuir)
- [Licencia](#licencia)

## Descripción del Proyecto

Vistazo es una plataforma minimalista de micropublicaciones que permite a los usuarios compartir pensamientos, ideas o mensajes en un solo lugar. A diferencia de una red social tradicional, los posts no aparecen en un feed global, sino que cada usuario tiene una URL única donde se muestran todas sus publicaciones. Cualquier persona con el enlace podrá leer los posts, pero no habrá interacciones como "me gusta" o comentarios.

## Tecnologías Usadas

Este proyecto utiliza las siguientes tecnologías y paquetes:

### Backend
- **Laravel**: Framework PHP utilizado para el desarrollo backend.
- **Livewire**: Paquete para crear interfaces dinámicas sin escribir JavaScript.

### Frontend
- **Tailwind CSS**: Framework CSS para diseño y estilos rápidos y personalizables.
- **Livewire**: (también en frontend) Para construir interfaces dinámicas y reactivas utilizando PHP, sin necesidad de escribir mucho JavaScript.


##  Convenciones usadas

- Modelos: Singular, PascalCase (User, OrderItem).
- Tablas: Plural, minúsculas y con guiones bajos (users, order_items).
- Controladores: PascalCase con Controller al final (UserController, ProductController).
- Rutas: Minúsculas, kebab-case (/user-profile, /order-items).
- Interfaces: PascalCase con prefijo I (IUserRepository, IProductService).
- Servicios y Repositorios: PascalCase (UserService, ProductRepository).
- Middleware: PascalCase (Authenticate, CheckAge).
- Migraciones: create_{table_name}_table (create_users_table).
- Factories: Singular, con Factory al final (UserFactory, ProductFactory).
- Políticas: PascalCase, {Model}Policy (ProductPolicy, UserPolicy).

## Documentation

[Documentation](https://linktodocumentation)


## Authors
- [@juan-ubaque](https://github.com/juan-ubaque)
- [@fabianrojasSab](https://github.com/fabianrojasSab)
## Licencia

Este proyecto está protegido por **todos los derechos reservados**. No se permite la modificación, distribución ni uso del software sin el permiso explícito del titular de los derechos de autor.

**Copyright (c) 2024 BytecreaColombia. Todos los derechos reservados.**