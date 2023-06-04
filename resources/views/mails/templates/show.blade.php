@extends('layouts.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
<style type="text/css">
   @media only screen and (min-width: 620px) {
   .u-row {
   width: 600px !important;
   }
   .u-row .u-col {
   vertical-align: top;
   }
   .u-row .u-col-100 {
   width: 600px !important;
   }
   }
   @media (max-width: 620px) {
   .u-row-container {
   max-width: 100% !important;
   padding-left: 0px !important;
   padding-right: 0px !important;
   }
   .u-row .u-col {
   min-width: 320px !important;
   max-width: 100% !important;
   display: block !important;
   }
   .u-row {
   width: 100% !important;
   }
   .u-col {
   width: 100% !important;
   }
   .u-col>div {
   margin: 0 auto;
   }
   }
   body {
   margin: 0;
   padding: 0;
   }
   table,
   tr,
   td {
   vertical-align: top;
   border-collapse: collapse;
   }
   p {
   margin: 0;
   }
   .ie-container table,
   .mso-container table {
   table-layout: fixed;
   }
   * {
   line-height: inherit;
   }
   a[x-apple-data-detectors='true'] {
   color: inherit !important;
   text-decoration: none !important;
   }
   table,
   td {
   color: #000000;
   }
   #u_body a {
   color: #0000ee;
   text-decoration: underline;
   }
</style>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css">
<!--<![endif]-->
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
   <div class="my-auto">
      <div class="d-flex">
         <h4 class="content-title mb-0 my-auto">Template</h4>
         <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ View Template
         </span>
      </div>
   </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
   <div class="col-lg-12 col-md-12">
      <div class="card">
         <div class="card-body">
            <div class="col-lg-12 margin-tb">
               <div class="pull-right">
                  <a class="btn btn-primary btn-sm" href="{{ route('templates.index') }}">Back</a>
               </div>
            </div>
            <div class="col-lg-12">
               <!--[if mso]>
               <div class="mso-container">
                  <![endif]-->
                  <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
                     <tbody>
                        <tr style="vertical-align: top">
                           <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top; padding: 20px">
                              <!--[if (mso)|(IE)]>
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                 <tr>
                                    <td align="center" style="background-color: #f9f9f9;">
                                       <![endif]-->
                                       <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                          <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                             <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                   <tr>
                                                      <td style="padding: 0px;background-color: transparent;" align="center">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="width:600px;">
                                                            <tr style="background-color: transparent;">
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                               <td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top">
                                                                  <![endif]-->
                                                                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                                     <div style="height: 100%;width: 100% !important;">
                                                                        <!--[if (!mso)&(!IE)]><!-->
                                                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                                           <!--<![endif]-->
                                                                           <!--[if (!mso)&(!IE)]><!-->
                                                                        </div>
                                                                        <!--<![endif]-->
                                                                     </div>
                                                                  </div>
                                                                  <!--[if (mso)|(IE)]>
                                                               </td>
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                          <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                             <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                   <tr>
                                                      <td style="padding: 0px;background-color: transparent;" align="center">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="width:600px;">
                                                            <tr style="background-color: #ffffff;">
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                               <td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top">
                                                                  <![endif]-->
                                                                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                                     <div style="height: 100%;width: 100% !important;">
                                                                        <!--[if (!mso)&(!IE)]><!-->
                                                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                                           <!--<![endif]-->
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                                          <tr>
                                                                                             <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                                                                                <img align="center" border="0" src="{{URL::asset('company')}}/{{$general_info->logo}}" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 32%;max-width: 179.2px;"
                                                                                                   width="179.2" />
                                                                                             </td>
                                                                                          </tr>
                                                                                       </table>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <!--[if (!mso)&(!IE)]><!-->
                                                                        </div>
                                                                        <!--<![endif]-->
                                                                     </div>
                                                                  </div>
                                                                  <!--[if (mso)|(IE)]>
                                                               </td>
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                          <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #2b1b67;">
                                             <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                   <tr>
                                                      <td style="padding: 0px;background-color: transparent;" align="center">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="width:600px;">
                                                            <tr style="background-color: #2b1b67;">
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                               <td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top">
                                                                  <![endif]-->
                                                                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                                     <div style="height: 100%;width: 100% !important;">
                                                                        <!--[if (!mso)&(!IE)]><!-->
                                                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                                           <!--<![endif]-->
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                                          <tr>
                                                                                             <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                                                                                <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1597218650916-xxxxc.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 26%;max-width: 150.8px;"
                                                                                                   width="150.8" />
                                                                                             </td>
                                                                                          </tr>
                                                                                       </table>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:0px 10px 31px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <div style="color: #f9f9fa; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                                                          <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 28px; line-height: 39.2px;"><strong><span style="line-height: 39.2px; font-size: 28px;">
                                                                                          {{ $template->mail_description }}
                                                                                        </span></strong>
                                                                                             </span>
                                                                                          </p>
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <!--[if (!mso)&(!IE)]><!-->
                                                                        </div>
                                                                        <!--<![endif]-->
                                                                     </div>
                                                                  </div>
                                                                  <!--[if (mso)|(IE)]>
                                                               </td>
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                          <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                             <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                   <tr>
                                                      <td style="padding: 0px;background-color: transparent;" align="center">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="width:600px;">
                                                            <tr style="background-color: #ffffff;">
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                               <td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top">
                                                                  <![endif]-->
                                                                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                                     <div style="height: 100%;width: 100% !important;">
                                                                        <!--[if (!mso)&(!IE)]><!-->
                                                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                                           <!--<![endif]-->
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <div style="line-height: 160%; text-align: left; word-wrap: break-word;">
                                                                                          <p style="font-size: 14px; line-height: 160%;"><span style="font-size: 19px; text-transform: uppercase; line-height: 35.2px;">Hi {{$card->name}}, </span></p>
                                                                                          <p style="font-size: 14px; line-height: 160%;"><span style="font-size: 18px; line-height: 28.8px;">
                                                                                          {!! $template->mail_body !!}
                                                                                         </span></p>
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:0px 55px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <!--[if mso]>
                                                                                       <style>.v-button {background: transparent !important;}</style>
                                                                                       <![endif]-->
                                                                                       <div align="left">
                                                                                          <!--[if mso]>
                                                                                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:44px; v-text-anchor:middle; width:216px;" arcsize="9%"  stroke="f" fillcolor="#025cd8">
                                                                                             <w:anchorlock/>
                                                                                             <center style="color:#FFFFFF;font-family:'Cabin',sans-serif;">
                                                                                                <![endif]-->
                                                                                                <a href="{{$general_info->website}}" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;font-family:'Cabin',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #025cd8; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                                                                                <span style="display:block;padding:14px 44px 13px;line-height:120%;"><span style="line-height: 16.8px;"><strong><span style="line-height: 16.8px;">
                                                                                                Visit Website
                                                                                            </span></strong>
                                                                                                </span>
                                                                                                </span>
                                                                                                </a>
                                                                                                <!--[if mso]>
                                                                                             </center>
                                                                                          </v:roundrect>
                                                                                          <![endif]-->
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px 60px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <div style="line-height: 160%; text-align: left; word-wrap: break-word;">
                                                                                          <p style="line-height: 160%; font-size: 14px;"><span style="font-size: 18px; line-height: 28.8px;">Thanks,</span></p>
                                                                                          <p style="line-height: 160%; font-size: 14px;"><span style="font-size: 18px; line-height: 28.8px;">The Company Team</span></p>
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <!--[if (!mso)&(!IE)]><!-->
                                                                        </div>
                                                                        <!--<![endif]-->
                                                                     </div>
                                                                  </div>
                                                                  <!--[if (mso)|(IE)]>
                                                               </td>
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                          <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #e5eaf5;">
                                             <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                   <tr>
                                                      <td style="padding: 0px;background-color: transparent;" align="center">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="width:600px;">
                                                            <tr style="background-color: #e5eaf5;">
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                               <td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top">
                                                                  <![endif]-->
                                                                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                                     <div style="height: 100%;width: 100% !important;">
                                                                        <!--[if (!mso)&(!IE)]><!-->
                                                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                                           <!--<![endif]-->
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:25px 55px 10px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <div style="color: #003399; line-height: 160%; text-align: center; word-wrap: break-word;">
                                                                                          <p style="font-size: 14px; line-height: 160%;"><span style="font-size: 20px; line-height: 32px;"><strong>Get in touch</strong></span></p>
                                                                                          <p style="font-size: 14px; line-height: 160%;"><span style="font-size: 16px; line-height: 25.6px; color: #000000;">{{ $general_info->phone }}</span></p>
                                                                                          <p style="font-size: 14px; line-height: 160%;"><span style="font-size: 16px; line-height: 25.6px; color: #000000;">{{ $general_info->email }}</span></p>
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 15px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <div align="center">
                                                                                          <div style="display: table; max-width:97px;">
                                                                                             <!--[if (mso)|(IE)]>
                                                                                             <table width="97" cellpadding="0" cellspacing="0" border="0">
                                                                                                <tr>
                                                                                                   <td style="border-collapse:collapse;" align="center">
                                                                                                      <table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:97px;">
                                                                                                         <tr>
                                                                                                            <![endif]-->
                                                                                                            <!--[if (mso)|(IE)]>
                                                                                                            <td width="32" style="width:32px; padding-right: 17px;" valign="top">
                                                                                                               <![endif]-->
                                                                                                               <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 17px">
                                                                                                                  <tbody>
                                                                                                                     <tr style="vertical-align: top">
                                                                                                                        <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                                                           <a href="{{$general_info->instagram}}" title="Instagram" target="_blank">
                                                                                                                           <img src="https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                                                           </a>
                                                                                                                        </td>
                                                                                                                     </tr>
                                                                                                                  </tbody>
                                                                                                               </table>
                                                                                                               <!--[if (mso)|(IE)]>
                                                                                                            </td>
                                                                                                            <![endif]-->
                                                                                                            <!--[if (mso)|(IE)]>
                                                                                                            <td width="32" style="width:32px; padding-right: 0px;" valign="top">
                                                                                                               <![endif]-->
                                                                                                               <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                                                                                                  <tbody>
                                                                                                                     <tr style="vertical-align: top">
                                                                                                                        <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                                                           <a href="{{$general_info->whatsapp}}" title="WhatsApp" target="_blank">
                                                                                                                           <img src="https://cdn.tools.unlayer.com/social/icons/circle-black/whatsapp.png" alt="WhatsApp" title="WhatsApp" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                                                           </a>
                                                                                                                        </td>
                                                                                                                     </tr>
                                                                                                                  </tbody>
                                                                                                               </table>
                                                                                                               <!--[if (mso)|(IE)]>
                                                                                                            </td>
                                                                                                            <![endif]-->
                                                                                                            <!--[if (mso)|(IE)]>
                                                                                                         </tr>
                                                                                                      </table>
                                                                                                   </td>
                                                                                                </tr>
                                                                                             </table>
                                                                                             <![endif]-->
                                                                                          </div>
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <!--[if (!mso)&(!IE)]><!-->
                                                                        </div>
                                                                        <!--<![endif]-->
                                                                     </div>
                                                                  </div>
                                                                  <!--[if (mso)|(IE)]>
                                                               </td>
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                       <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                          <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #2b1b67;">
                                             <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                                <!--[if (mso)|(IE)]>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                   <tr>
                                                      <td style="padding: 0px;background-color: transparent;" align="center">
                                                         <table cellpadding="0" cellspacing="0" border="0" style="width:600px;">
                                                            <tr style="background-color: #2b1b67;">
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                               <td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top">
                                                                  <![endif]-->
                                                                  <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                                                     <div style="height: 100%;width: 100% !important;">
                                                                        <!--[if (!mso)&(!IE)]><!-->
                                                                        <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                                           <!--<![endif]-->
                                                                           <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                                              <tbody>
                                                                                 <tr>
                                                                                    <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;" align="left">
                                                                                       <div style="color: #fafafa; line-height: 180%; text-align: center; word-wrap: break-word;">
                                                                                          <p style="font-size: 14px; line-height: 180%;"><span style="font-size: 16px; line-height: 28.8px;">Copyrights © {{$general_info->company_name}} All Rights Reserved</span></p>
                                                                                       </div>
                                                                                    </td>
                                                                                 </tr>
                                                                              </tbody>
                                                                           </table>
                                                                           <!--[if (!mso)&(!IE)]><!-->
                                                                        </div>
                                                                        <!--<![endif]-->
                                                                     </div>
                                                                  </div>
                                                                  <!--[if (mso)|(IE)]>
                                                               </td>
                                                               <![endif]-->
                                                               <!--[if (mso)|(IE)]>
                                                            </tr>
                                                         </table>
                                                      </td>
                                                   </tr>
                                                </table>
                                                <![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                       <!--[if (mso)|(IE)]>
                                    </td>
                                 </tr>
                              </table>
                              <![endif]-->
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <!--[if mso]>
               </div>
               <![endif]-->
               <!--[if IE]>
            </div>
            <![endif]-->
         </div>
      </div>
   </div>
</div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection