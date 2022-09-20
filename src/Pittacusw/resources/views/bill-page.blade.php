<div class="seccion">
  <table class="tabla">
    <tr>
      <td class="datos" rowspan="2">
        <p><strong>{{ $xml->Encabezado->Emisor->RznSoc ?? $xml->Encabezado->Emisor->RznSocEmisor }}</strong></p>
        <p>{{ $xml->Encabezado->Emisor->GiroEmis ?? $xml->Encabezado->Emisor->GiroEmisor }}</p>
        <p>
        <div class="line"></div>
        </p>
        <p>{{ $xml->Encabezado->Emisor->DirOrigen }}, {{ $xml->Encabezado->Emisor->CmnaOrigen }}</p>
      </td>
      <td class="cuadro">
        <p>R.U.T.: @format_rut($xml->Encabezado->Emisor->RUTEmisor)</p>
        <p>{{ strtoupper($type->name) }}</p>
        <p>N° {{ $xml->Encabezado->IdDoc->Folio }}</p>
      </td>
    </tr>
    <tr>
      <td class="sucursal">S.I.I. - {{
strtoupper($county->sii_branch->name ?? '') }}</td>
    </tr>
  </table>
</div>
<div class="seccion">
  <table class="tabla bordeTabla">
    <tr>
      <td><strong>Fecha emisión:</strong></td>
      <td>@chilean_date($xml->Encabezado->IdDoc->FchEmis)</td>
      <td>@if(isset($xml->Encabezado->IdDoc->FchVenc))<strong>Fecha vencimiento:</strong>@endif</td>
      <td>@if(isset($xml->Encabezado->IdDoc->FchVenc)) @chilean_date($xml->Encabezado->IdDoc->FchVenc ?? $xml->Encabezado->IdDoc->FchEmis)@endif</td>
    </tr>
    @if($xml->Encabezado->IdDoc->TipoDTE != 39)
      <tr>
        <td><strong>Señor(es):</strong></td>
        <td>{{ $xml->Encabezado->Receptor->RznSocRecep }}</td>
        <td><strong>R.U.T.:</strong></td>
        <td>@format_rut($xml->Encabezado->Receptor->RUTRecep)</td>
      </tr>
      <tr>
        <td><strong>Giro:</strong></td>
        <td colspan="3">{{ $xml->Encabezado->Receptor->GiroRecep }}</td>
      </tr>
      <tr>
        <td><strong>Dirección:</strong></td>
        <td>{{ $xml->Encabezado->Receptor->DirRecep }}</td>
        <td><strong>Comuna:</strong></td>
        <td>{{ $xml->Encabezado->Receptor->CmnaRecep }}</td>
      </tr>
    @endif
  </table>
</div>
<div class="seccion ">
  <table class="tabla bordeTabla details">
    <tr>
      @if(isset($xml->Detalle[0]->CdgItem->VlrCodigo))
        <th>Sku</th>
      @endif
      <th>Desc.</th>
      <th>Can.</th>
      <th>P. Un.</th>
      <th>Total</th>
    </tr>
    @foreach($xml->Detalle as $details)
      <tr>
        @if(isset($details->CdgItem->VlrCodigo))
          <td>{{ $details->CdgItem->VlrCodigo ?? '' }}</td>
        @endif
        <td><span style="text-transform: uppercase">{{ $details->NmbItem  }}</span> <span class="small-font">{{ isset($details->DscItem) && !is_object($details->DscItem) ? $details->DscItem : '' }}</span></td>
        <td>{{ $details->QtyItem ?? 1 }} {{ isset($details->UnmdItem)&&is_string($details->UnmdItem) ? $details->UnmdItem : ''  }}</td>
        <td>@currency_format($details->MontoItem / ($details->QtyItem ?? 1))</td>
        <td>@currency_format($details->MontoItem)</td>
      </tr>
    @endforeach
  </table>
</div>
<div class="seccion">
  <table class="tabla">
    <tr>
      <td style="width: 50%;">
        @if(isset($xml->Encabezado->Transporte->DirDest))
          <table class="tabla bordeTabla small-font">
            <tr>
              <td width="30%"><strong>Dirección despacho:</strong></td>
              <td width="70%">{{ $xml->Encabezado->Transporte->DirDest ?? '' }} - {{ $xml->Encabezado->Transporte->CmnaDest ?? '' }}</td>
            </tr>
          </table>
        @endif
      </td>
      <td style="width: 17%"></td>
      <td rowspan="2">
        <table class="tabla bordeTabla">
          @if (isset($xml->Encabezado->Totales->MntExento))
            <tr>
              <td><strong>Exento</strong></td>
              <td class="right">@currency_format($xml->Encabezado->Totales->MntExento)</td>
            </tr>
          @endif
          @if (isset($xml->Encabezado->Totales->MntNeto))
            <tr>
              <td><strong>Neto</strong></td>
              <td class="right">@currency_format($xml->Encabezado->Totales->MntNeto)</td>
            </tr>
          @endif
          @if (isset($xml->Encabezado->Totales->IVA))
            <tr>
              <td><strong>IVA (19%)</strong></td>
              <td class="right">@currency_format($xml->Encabezado->Totales->IVA)</td>
            </tr>
          @endif
          @if (isset($xml->Encabezado->Totales->ImptoReten))
            @foreach($xml->Encabezado->Totales->ImptoReten as $ImptoReten)
              <tr>
                <td><strong>@additional_tax_name($ImptoReten->TipoImp) @if(isset($ImptoReten->TasaImp)) ({{ $ImptoReten->TasaImp }}%) @endif</strong></td>
                <td class="right"> @currency_format($ImptoReten->MontoImp)</td>
              </tr>
            @endforeach
          @endif
          <tr>
            <td><strong>Monto total</strong></td>
            <td class="right">@currency_format($xml->Encabezado->Totales->MntTotal)</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td style="width: 50%;">
        @if(isset($xml->Referencia))
          <table class="tabla bordeTabla small-font">
            <tr>
              <th>Fecha</th>
              <th>Doc. ref.</th>
              <th>Folio</th>
              <th>Glosa</th>
            </tr>
            @foreach($xml->Referencia as $referencia)
              <tr>
                <td>@chilean_date($referencia->FchRef)</td>
                <td>@documents_type_name( $referencia->TpoDocRef)</td>
                <td>{{ $referencia->FolioRef }}</td>
                <td>{{ !isset($referencia->RazonRef) || is_object($referencia->RazonRef)  ? '' : $referencia->RazonRef }}</td>
              </tr>
            @endforeach
          </table>
        @endif
        @if($type->code == 801)
          <table class="tabla bordeTabla">
            <tr>
              <td><strong>Horario de atención</strong></td>
              <td>Lunes a viernes 09:00 - 17:00 hrs. excepto festivos</td>
            </tr>
            <tr>
              <td><strong>Encargado</strong></td>
              <td>Luca Alcalde</td>
            </tr>
            <tr>
              <td><strong>Teléfono</strong></td>
              <td>+56 9 3052 3414</td>
            </tr>
            <tr>
              <td><strong>Correo electrónico</strong></td>
              <td>minimalistik.ltda@gmail.com</td>
            </tr>
          </table>
        @endif
      </td>
    </tr>
    <tr>
      <td>
        @if(isset($xml->DscRcgGlobal))
          <table class="tabla bordeTabla small-font">
            <tr>
              <th colspan="3">Descuentos y recargos globales</th>
            </tr>
            @foreach($xml->DscRcgGlobal as $DscRcgGlobal)
              <tr>
                <td>{{ $DscRcgGlobal->TpoMov == 'D' ? 'Descuento' : 'Recargo' }}</td>
                <td>{{ $DscRcgGlobal->GlosaDR ?? NULL }}</td>
                <td>@currency_format($DscRcgGlobal->ValorDR)</td>
              </tr>
            @endforeach
          </table>
        @endif
      </td>
    </tr>
    <tr>
      <td style="width: 50%;"> @if(!empty($ted) && !in_array($type->code,[777,801]))
          <div class="seccion timbre-section">
            <p><img class="timbre" src="data:image/png;base64,{{ $ted }}" alt="barcode"/></p>
            <p>Timbre electrónico S.I.I.</p>
            <p>Resolución: 80 del 2014</p>
            <p>Verifique documento: http://www.sii.cl</p>
          </div>
        @endif</td>

      <td colspan="2">
        @if($page===1 && $xml->Encabezado->Emisor->RUTEmisor=='76292477-3' && $type->id == 11)
          <table class="tabla bordeTabla small-font">
            <tr>
              <td colspan="2"><strong>Realiza tu pago</strong></td>
              <td colspan="2"><strong>Envía el comprobante a:</strong></td>
            </tr>
            <tr>
              <td colspan="2">Cuenta corriente banco BICE N° 16715328</td>
              <td colspan="2">minimalistik.ltda@gmail.com</td>
            </tr>
          </table>
        @elseif($page===2 && in_array($type->code,[33,34,52]))
          <table class="tabla bordeTabla small-font" style="padding: 3px;">
            <tr>
              <td>Nombre: _____________________</td>
              <td>RUT: ____________________________</td>
            </tr>
            <tr>
              <td>Recinto: _____________________</td>
              <td>Fecha: ___________________________</td>
            </tr>
            <tr>
              <td colspan="2">Firma: _____________________________________________________________</td>
            </tr>
            <tr>
              <td colspan="2"><strong>"El acuse de recibo que se declara en este acto, de acuerdo a lo dispuesto en la letra b) del Art. 4º, y la letra c) del Art. 5º de la Ley 19.983, acredita que la entrega de mercaderias o servicio(s) prestado(s) ha(n) sido recibido(s)".</strong></td>
            </tr>
          </table>
        @endif</td>
    </tr>
    <tr>
      <td class="developed">Desarrollado por <a href="https://www.touchef.cl">Touchef</a></td>
      <td class="bottom right" colspan="2">
        @if(in_array($type->code,[33,34,52]) && $page===1)
          Original
        @elseif(in_array($type->code,[33,34])&& $page===2)
          Cedible
        @elseif($type->code===52&& $page===2)
          Cedible con su factura
        @endif
      </td>
    </tr>
  </table>
</div>
