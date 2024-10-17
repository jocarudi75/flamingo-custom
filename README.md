# flamingo-custom
A customization of the WordPress plugin called Flamingo to allow editing of the values ​​stored in the submitted Contact form.

Basado en Flamingo de: takayukister, megumithemes, itpixelz versión: 2.4 Requiere PHP: 7.4 Licencia: GPLv2 o posterior URI de la licencia: https://www.gnu.org/licenses/gpl-2.0.html Enlace de donación: https: //contactform7.com/donar/

Un complemento de almacenamiento de mensajes confiable para Contact Form 7, que permite además de consultar los mensajes almacenados editar, gracias a esta modificación, el valor de los campos del mensaje almacenados.

== Descripción ==

Flamingo es un complemento de almacenamiento de mensajes creado originalmente para Contact Form 7 , que no almacena los mensajes enviados.

Después de activar el complemento, encontrará Flamingo en el menú de la pantalla de administración de WordPress. Todos los mensajes enviados a través de los formularios de contacto se enumeran allí y se pueden buscar. Con Flamingo, ya no tendrá que preocuparse por perder mensajes importantes debido a problemas con el servidor de correo o una configuración incorrecta en la configuración del correo.

Para obtener información más detallada, consulte la página de documentación del Formulario de contacto 7 .

Gracias a esta modificación es posible editar los mensajes almacenados por Flamingo y cambiar alguno de los valores almacenados.

= Avisos de privacidad = Este complemento almacena datos de envío recopilados a través de formularios de contacto, que pueden incluir información personal de los remitentes, en la base de datos del servidor que aloja el sitio web.

==Instalación==

Sube la carpeta flamingo-customcompleta al directorio /wp-content/plugins/.
Active el complemento a través del menú 'Complementos' en WordPress.
== Registro de cambios ==

= 2,4 =

Aumente la versión mínima requerida de WordPress a 6.1.
Aumente la versión mínima requerida de PHP a 7.4.
Elimine los códigos de mensajes salientes no utilizados.
Introduce clases Flamingo_CSVpara una generación de CSV totalmente personalizable.
Nuevo filtro de gancho:flamingo_contact_csv_class
Nuevo filtro de gancho:flamingo_inbound_csv_class
Utiliza admin_initpara programar trabajos cron.
Permite editar los valores de los campos almacenados por el complemento.
