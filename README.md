# Sistema de Generación de Certificados en PDF

## Descripción

Sistema web desarrollado para la generación automática de certificados académicos en formato PDF. Permite generar certificados personalizados dinámicamente a partir de plantillas.

El sistema implementa arquitectura MVC utilizando CodeIgniter, integrando una base de datos relacional y generación de documentos PDF en tiempo real desde el backend.

---

## Funcionalidades

- Generación automática de certificados personalizados
- Exportación directa en formato PDF
- Validación de datos antes de la generación
- Arquitectura basada en el patrón MVC

---

## Tecnologías Utilizadas

### Backend
- PHP
- CodeIgniter

### Generación de PDF
- Librería de generación de PDF (TCPDF)

### Frontend
- HTML5
- CSS3
- Bootstrap

### Base de Datos
- MySQL

### Control de Versiones
- Git

---

## Arquitectura del Sistema

El sistema está estructurado bajo el patrón Modelo-Vista-Controlador (MVC):

- Models: Gestión de consultas y lógica de acceso a datos.
- Views: Plantillas HTML utilizadas para generar los certificados.
- Controllers: Lógica de negocio y generación del PDF.

### Flujo de Generación del Certificado

1. El usuario selecciona el participante y el evento.
2. El controlador obtiene los datos desde el modelo.
3. Se carga una plantilla HTML con los datos dinámicos.
4. La plantilla es procesada por la librería de PDF.
5. Se genera el archivo PDF y se envía al navegador para su descarga.

---

## Instalación

1. Clonar el repositorio:

```bash
git clone https://github.com/tuusuario/sistema-certificados.git
```

2. Configurar la base de datos en el archivo correspondiente.

3. Instalar dependencias (si aplica Composer):

```bash
composer install
```

4. Ejecutar el servidor local:

```bash
php spark serve
```

5. Acceder desde el navegador:

```
http://localhost:8080
```

---

## Estructura del Proyecto

```
app/
 ├── Controllers/
 ├── Models/
 ├── Views/
public/
 ├── assets/
```

---

## Generación del PDF

El certificado se genera dinámicamente a partir de una plantilla HTML procesada por la librería de generación de PDF. El sistema inserta automáticamente:

- Nombre del participante
- Documento de identificación
- Nombre del evento
- Fecha de emisión
- Firmas y elementos gráficos

El PDF se genera en tiempo real y puede descargarse directamente desde el navegador.

---

## Ejemplo

View del Seminario internacional de Ingeniería Ambiental
<img width="1919" height="947" alt="image" src="https://github.com/user-attachments/assets/d2ed7595-4773-4c03-b74c-f91bb3ef76a2" />

Generación del PDF descargable
<img width="1920" height="959" alt="image" src="https://github.com/user-attachments/assets/e037647f-5c8c-4c73-adcc-3fa986121519" />

---

## Seguridad

- Validación de formularios en backend
- Protección básica contra inyección SQL mediante uso de modelos
- Separación de responsabilidades en capas

---

## Autor

Jonás Samuel Salazar Torres  
Estudiante de Ingeniería de Sistemas – Noveno semestre  
GitHub: https://github.com/zzzam21
