@extends('front/layout')
@section('contenido')

  <div class="container py-3">
    <div class="terminos-box mx-auto p-4 p-md-5">

      <h1 class="mb-4 text-center">Términos y Usos</h1>

        <p class="text-muted">
          Última actualización: {{ date('d/m/Y') }}
        </p>

        <h4>1. Información general</h4>
          <p>El presente Aviso Legal regula el acceso, navegación y uso del sitio web
            Prisma Gallery (en adelante, “el sitio”), dedicado a la comercialización de cuadros,
            obras decorativas y productos relacionados. El acceso y uso del sitio implica
            la aceptación plena, expresa y sin reservas de estos términos y condiciones por parte del usuario.
            En caso de no estar de acuerdo con alguno de los puntos aquí establecidos, se recomienda
            abstenerse de utilizar el sitio.</p>

        <h4>2. Uso del sitio</h4>
          <p>El usuario se compromete a utilizar el sitio de manera responsable, diligente y conforme a la
            legislación vigente, la moral, las buenas costumbres y el orden público, absteniéndose de:</p>
          <ul>
              <li>Realizar actividades ilícitas, fraudulentas o contrarias a la buena fe.</li>
              <li>Dañar, sobrecargar, deteriorar o afectar el funcionamiento del sitio o de sus sistemas.</li>
              <li>Intentar acceder sin autorización a datos, cuentas o información de otros usuarios.</li>
              <li>Introducir virus, malware u otros elementos que puedan causar perjuicios al sitio o a terceros.</li>
            </ul>
        <p>Prisma Gallery se reserva el derecho de restringir, suspender o cancelar el acceso al sitio
        en caso de detectar un uso indebido o contrario a estos términos.</p>

        <h4>3. Servicios ofrecidos</h4>
          <p>Prisma Gallery ofrece la venta online de cuadros decorativos, obras artísticas y productos relacionados
            con la decoración. Las características, descripciones, precios y disponibilidad de los productos
            podrán ser modificados en cualquier momento y sin previo aviso, sin que ello genere derecho a reclamo
            alguno por parte del usuario.</p>

        <h4>4. Registro de usuarios</h4>
          <p>Para realizar compras, el usuario podrá registrarse proporcionando información veraz, completa y actualizada.
            El usuario es responsable de:
          </p>
          <ul>
            <li>Mantener la confidencialidad de sus credenciales de acceso.</li>
            <li>Notificar cualquier uso no autorizado de su cuenta.</li>
            <li>Todas las actividades realizadas desde su cuenta.</li>
          </ul>
          <p>Prisma Gallery no será responsable por el uso indebido de cuentas derivado de negligencia del usuario.</p>

        <h4>5. Compras</h4>
          <p>El proceso de compra incluye las siguientes etapas:</p>
            <ol>
              <li>Selección del producto.</li>
              <li>Confirmación del carrito de compras.</li>
              <li>Ingreso de datos personales y de envío.</li>
              <li>Selección del método de pago.</li>
              <li>Confirmación final de la compra.</li>
            </ol>
          <p>Una vez completado el proceso, el usuario recibirá una confirmación por correo electrónico.
          Dicha confirmación no implica necesariamente la aceptación definitiva de la operación,
          la cual podrá estar sujeta a validaciones adicionales.
          </p>

        <h4>6. Precios y formas de pago</h4>
          <p>Los precios están expresados en la moneda local e incluyen, cuando corresponda, los impuestos aplicables
            según la normativa vigente. Se aceptarán los métodos de pago habilitados en el sitio, tales como tarjetas
            de crédito, débito, transferencias bancarias u otros medios electrónicos disponibles. Prisma Gallery se
            reserva el derecho de modificar precios y promociones en cualquier momento.
          </p>

        <h4>7. Envíos</h4>
          <p>Los envíos se realizan dentro del territorio indicado en el sitio.
            El tiempo de entrega dependerá de la ubicación del usuario y del operador logístico.
            Prisma Gallery no se responsabiliza por demoras atribuibles a terceros (servicios de correo o logística).
          </p>

          <p>El usuario deberá proporcionar correctamente los datos de envío. En caso de errores en la información
            suministrada, Prisma Gallery no será responsable por inconvenientes en la entrega.
          </p>

        <h4>8. Garantías y devoluciones</h4>
          <p>Los productos cuentan con garantía en caso de:</p>
          <ul>
            <li>Daños ocasionados durante el envío.</li>
            <li>Deterioros visibles al momento de la entrega.</li>
          </ul>
          <p>El usuario podrá solicitar el cambio o devolución dentro de un plazo razonable desde la recepción del producto,
            conforme a las políticas vigentes.
          </p>
          <p>Condiciones:</p>
          <ul>
            <li>El producto debe encontrarse en buen estado.</li>
            <li>Debe conservar su embalaje original.</li>
            <li>No debe presentar signos de uso indebido.</li>
          </ul>
          <p>Prisma Gallery evaluará cada caso y determinará la procedencia del reclamo.</p>

        <h4>9. Soporte postventa</h4>
          <p>Prisma Gallery brindará atención al cliente para:</p>
          <ul>
            <li>Consultas sobre productos.</li>
            <li>Reclamos o inconvenientes.</li>
            <li>Seguimiento de pedidos.</li>
          </ul>
          <p>El contacto se realizará a través de los medios oficiales indicados en el sitio,
            procurando brindar una respuesta en un plazo razonable.
          </p>

        <h4>10. Propiedad intelectual</h4>
          <p>Todos los contenidos del sitio, incluyendo imágenes, diseños, textos, logotipos, gráficos y demás elementos,
            son propiedad de Prisma Gallery o cuentan con las licencias correspondientes para su uso. 
          </p>
          <p>Queda estrictamente prohibida su reproducción, distribución, modificación o utilización sin autorización
            expresa y por escrito.
          </p>

        <h4>11. Privacidad y Seguridad</h4>
          <p>Prisma Gallery recopila datos personales con el fin de:</p>
          <ul>
            <li>Procesar compras.</li>
            <li>Gestionar envíos.</li>
            <li>Mejorar la experiencia del usuario.</li>
          </ul>
          <p>Los datos no serán compartidos con terceros, salvo en los casos necesarios para la
            prestación del servicio (por ejemplo, empresas de envío) o por obligación legal.</p>
          <p>El usuario podrá solicitar en cualquier momento la modificación, actualización o
            eliminación de sus datos personales conforme a la normativa vigente.
          </p>
          <p>El sitio adopta medidas de seguridad técnicas y organizativas razonables para proteger
            la información de los usuarios. No obstante, no se puede garantizar una seguridad absoluta
            frente a accesos no autorizados. Prisma Gallery no se hará responsable del ingreso no autorizado
            de un tercero por negligencia del usuario.
          </p>

        <h4>12. Modificaciones</h4>
          <p>Prisma Gallery se reserva el derecho de modificar, actualizar o reemplazar estos términos y 
            condiciones en cualquier momento. Las modificaciones entrarán en vigencia desde su publicación en el sitio. 
            Se recomienda al usuario revisar periódicamente este documento.
          </p>
        
        <h4>13. Legislación aplicable</h4>
          <p>El presente Aviso Legal se rige por las leyes vigentes en la República Argentina. En consecuencia, 
            cualquier interpretación, validez o ejecución de sus disposiciones se realizará conforme a dicha normativa. 
            Ante cualquier controversia, conflicto o reclamo que pudiera surgir en relación con el uso del 
            sitio web o los servicios ofrecidos, las partes acuerdan someterse a la jurisdicción de los tribunales 
            ordinarios competentes, con renuncia expresa a cualquier otro fuero o jurisdicción que pudiera corresponder.
          </p>
        
        <h4>14. Contacto</h4>
          <p>Para consultas, reclamos o solicitudes relacionadas con estos términos y condiciones, el usuario podrá 
            comunicarse a través de los canales oficiales indicados en el sitio web, tales como el formulario de contacto, 
            correo electrónico o redes sociales habilitadas por Prisma Gallery. El equipo de atención al cliente se 
            compromete a responder en un plazo razonable, brindando asistencia y orientación en relación con cualquier duda, 
            inconveniente o requerimiento que pudiera surgir durante el uso del sitio o la adquisición de productos.
          </p>
        
    </div>
  </div>

@endsection