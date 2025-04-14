## Formatos de vídeo HTML
Hay tres formatos de vídeo compatibles: MP4, WebM y Ogg. La compatibilidad del navegador con los diferentes formatos es:
| **Browser** | **MP4** | **WebM** | **Ogg** |
|---------|-----|------|-----|
| Edge    | YES | YES  | YES |
| Chrome  | YES | YES  | YES |
| Firefox | YES | YES  | YES |
| Safari  | YES | YES  | NO  |
| Opera   | YES | YES  | YES |

## Vídeo HTML: tipos de medios

| File Format   |	Media Type |
|--------------|-----------|
| MP4 |	video/mp4 |
| WebM | video/webm |
| Ogg |video/ogg |

```html
<video width="320" height="240" autoplay>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Tu navegador no soporta el video tag.
</video>
```
El `controls` atributo agrega controles de video, como reproducción, pausa y volumen.

Es recomendable incluir siempre los atributos `widthy` `height`. Si no se configuran la altura y el ancho, la página podría parpadear mientras se carga el vídeo.

Este `<source>` elemento permite especificar archivos de vídeo alternativos que el navegador puede seleccionar. El navegador usará el primer formato reconocido.

El texto entre las etiquetas `<video>` y `</video>` solo se mostrará en navegadores que no admitan el <video>elemento.
