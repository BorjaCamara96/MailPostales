![image](https://github.com/user-attachments/assets/978fd499-c6ff-4585-b091-44c174f20029)# 📧 Sistema de Envío de Postales por Email

El Sistema de Envío de Postales por Email es una aplicación web en PHP que permite enviar postales electrónicas a través del servidor de correo Axigen. La aplicación utiliza la API PDO para conectar y gestionar la base de datos MySQL, asegurando el almacenamiento eficiente de las postales y la información de los usuarios.

## 📷 Screenshots

![App Screenshot](https://borjacamara.es/src/images/app_enviopostales.JPG)

# 🛠️ Tecnologías Utilizadas

- 💻 **Lenguaje de Programación: PHP**
- 💾 **Base de Datos: MySQL**
- 🔄 **Interacción con Base de Datos: API PDO**
- 📧 **Servidor de Correo: Axigen**

# 🚀 Funcionalidades

📨 Envío de Postales: Permite a los usuarios enviar postales electrónicas a través del servidor de correo Axigen. <br>
👥 Gestión de Usuarios: Almacenamiento y gestión de la información de usuarios en la base de datos. <br>
🖼️ Almacenamiento de Postales: Guarda las postales creadas por los usuarios en la base de datos para su posterior envío.<br>

# 📂 Instrucciones
- 📂 **Importar la Base de Datos MySQL**

Crear Base de Datos: Abre MySQL Workbench o cualquier otra herramienta de administración de MySQL.

- **Importar Script SQL:**

Ve a File > Open SQL Script y selecciona el archivo .sql proporcionado. <br>
Ejecuta el script para crear y poblar las tablas necesarias (Usuarios, Postales, etc.).

- 🖥️ **Configurar el Entorno**

**Configurar Archivo de Conexión a Base de Datos:**

En el archivo de configuración, actualiza las credenciales de acceso a la base de datos MySQL.

**Configurar Servidor de Correo Axigen:**

Configura los parámetros del servidor de correo Axigen en la aplicación para permitir el envío de postales electrónicas.

- 🧩 **Ejecutar la Aplicación**
  
**Subir Archivos al Servidor:**

Sube todos los archivos del proyecto a tu servidor web.

**Acceder a la Aplicación:**

Abre tu navegador web y ve a la URL donde se encuentra desplegada la aplicación para comenzar a usarla.

- 🛡️ **Seguridad**
  
🔒 Cifrado de Contraseñas: Almacenamiento de contraseñas cifradas en la base de datos. <br>
🔐 Protección de Datos: Validación y sanitización de entradas para prevenir inyecciones SQL y otros ataques.
