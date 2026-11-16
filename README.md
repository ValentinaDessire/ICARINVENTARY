# Inventario ICAR

Sistema web de gestión para un concesionario de vehículos: controla el inventario de carros y registra clientes, vendedores, compras y ventas desde un panel con inicio de sesión.

> Proyecto académico · Ingeniería en Informática (URBE)

## Funcionalidades

- Inicio de sesión y registro de usuarios.
- Menú principal con acceso a cada módulo.
- **CRUD completo** (crear, consultar, modificar y eliminar) para cinco módulos:
  - Carros
  - Clientes
  - Vendedores
  - Compras
  - Ventas
- Tablas dinámicas en el navegador con JavaScript.
- Script SQL con la estructura de la base de datos (`carros.sql`).

## Tecnologías

`PHP` · `MySQL` · `JavaScript` · `Vue.js` · `HTML5` · `CSS3` · `Animate.css`

## Estructura

```
inventario/
├── index.php / login.php / registro.php   # Acceso
├── menu.php                               # Panel principal
├── Carros.php, Clientes.php, ...          # Listados por módulo
├── modificar*.php / eliminar*.php         # Edición y borrado
├── conexion.php                           # Conexión a MySQL
├── carros.sql                             # Estructura de la base de datos
├── css/  js/  img/
```

## Cómo ejecutarlo

1. Instala [XAMPP](https://www.apachefriends.org/) (Apache + MySQL).
2. Copia la carpeta `inventario/` dentro de `htdocs/`.
3. En phpMyAdmin crea una base de datos e importa `carros.sql`.
4. Ajusta usuario, contraseña y nombre de la base en `conexion.php`.
5. Abre `http://localhost/inventario/` en el navegador.

---

Hecho por **Valentina Quintero** · [Portafolio](https://valentinadessire.github.io) · [GitHub](https://github.com/ValentinaDessire)
