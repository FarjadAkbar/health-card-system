<!DOCTYPE html>
<html
  lang="en"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:v="urn:schemas-microsoft-com:vml"
  xmlns:o="urn:schemas-microsoft-com:office:office"
>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"
    />
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting" />
    <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>Sama Cards</title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i"
      rel="stylesheet"
    />
    <!-- CSS Reset : BEGIN -->
    <style>
      @media only screen and (max-width: 480px),
        only screen and (max-device-width: 480px) {
        body {
          font-size: 12px;
        }

        #wrapper {
          width: 100% !important;
          max-width: 100% !important;
        }

        .my-content {
          text-align: center !important;
          padding: 20px !important;
          font-size: 12px !important;
        }

        .trip-arrow {
          background-size: 80% !important;
        }

        .route-name {
          font-size: 16px !important;
          margin-left: 20px !important;
        }

        .route-name-right {
          margin-right: 20px !important;
        }

        .footer .w100,
        .moreDet .more-det,
        .moreDet .more-det-img {
          width: 100% !important;
          display: block !important;
          text-align: center !important;
          margin-bottom: 10px !important;
        }

        .v-line {
          display: none !important;
        }

        .booking-button {
          margin: 30px auto !important;
        }

        .line {
          margin: 0 auto 30px !important;
        }

        .baroque-terms {
          padding: 20px !important;
        }

        .img-aviation {
          margin-top: 0 !important;
        }

        .footer {
          padding-bottom: 10px !important;
        }

        .table-main {
          font-family: Helvetica, Arial, sans-serif;
          border: 0;
          border-spacing: 0;
          border-collapse: collapse;
        }

        .banner {
          margin: 0;
          padding: 0;
        }

        .banner-table {
          font-family: Helvetica, Arial, sans-serif;
          border: 0;
          border-spacing: 0;
          border-collapse: collapse;
          margin: 0;
          padding: 0;
        }
      }
    </style>
  </head>
  <body
    style="
      margin: 0;
      padding: 0;
      background: #fff;
      font-family: Helvetica, Arial, sans-serif;
      font-size: 14px;
      font-weight: normal; "
  >
    <div
      id="wrapper"
      style="margin: 0 auto; padding: 0; width: 600px; max-width: 600px"
    >
      <table class="table-main" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr style="margin: 0; padding: 0">
            <td colspan="2" valign="middle" style="margin: 0; padding: 0">
              <table
                cellpadding="0"
                cellspacing="0"
                width="100%"
                class="header banner-table"
              >
                <tbody>
                  <tr style="margin: 0; padding: 0">
                    <td colspan="2" valign="middle" class="banner">
                      <a
                        href="mailto:request@baroqueaviation.com?subject={{$subject}}&body={!! $mailto_body !!}"
                        target="_blank"
                        style="text-decoration: none"
                        ><img
                          src="https://samacardsbh.com/slider/WhatsApp%20Image%202022-12-27%20at%201.47.00%20PM.jpeg"
                          alt="Baroque Banner"
                          class="img-reponsive"
                          style="width: 100%"
                      /></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table
                cellpadding="0"
                cellspacing="0"
                width="100%"
                style="
                  font-family: Helvetica, Arial, sans-serif;
                  border: 0;
                  border-spacing: 0;
                  border-collapse: collapse;
                "
              >
                <tbody>
                  <tr style="margin: 0; padding: 0">
                    <td
                      colspan="2"
                      valign="middle"
                      class="my-content"
                      style="margin: 0; padding: 40px 0"
                    >
                      <p style="margin: 10px 0; padding: 0">
                        Dear, {{ $card->name }}
                      </p>
                      <p style="margin: 10px 0; padding: 0">
                        {!! $data->customer_content !!}
                      </p>
                    </td>
                  </tr>

                </tbody>
              </table>
              <table
                cellpadding="0"
                cellspacing="0"
                width="100%"
                style="
                  font-family: Helvetica, Arial, sans-serif;
                  border: 0;
                  border-spacing: 0;
                  border-collapse: collapse;
                "
              >
                <tbody>
                  <tr style="margin: 0; padding: 0">
                    <td
                      colspan="2"
                      valign="middle"
                      class="need-help"
                      style="
                        margin: 0;
                        padding: 20px 0;
                        background: #eef1f5;
                        text-align: center;
                      "
                    >
                      <p style="margin: 10px 0; padding: 0">
                        Need help or additional information?
                      </p>
                      <p style="margin: 10px 0; padding: 0">
                        Contact us directly.
                      </p>
                      <a
                        tel="+973 776 90000"
                        class="whatsapp"
                        href="https://wa.me/97377690000"
                        style="
                          text-decoration: none;
                          margin-top: 15px;
                          display: block;
                        "
                        ><img
                          src="https://baroque-media.s3.amazonaws.com/aviation/whatsapp-icon.png"
                          alt="Whatsapp"
                      /></a>
                      <p style="margin: 10px 0; padding: 0">+1 917 690 6202</p>
                    </td>
                  </tr>
                  <tr style="margin: 0; padding: 0">
                    <td
                      colspan="2"
                      valign="middle"
                      align="center"
                      style="margin: 0; padding: 10px 0 0 0"
                    >
                      <a
                        href="mailto:info@samacardsbh.com?subject={{$subject}}&body={!! $mailto_body !!}"
                        ><img
                          src="https://samacardsbh.com/assets/home/images/logo_home2.png"
                          alt="Sam Logo"
                          class="img-reponsive"
                          style="width: 200px;"
                      /></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table
                cellpadding="0"
                cellspacing="0"
                width="100%"
                style="
                  font-family: Helvetica, Arial, sans-serif;
                  border: 0;
                  border-spacing: 0;
                  border-collapse: collapse;
                "
              >
                <tbody>
                  <tr style="margin: 0; padding: 0">
                    <td
                      colspan="2"
                      valign="middle"
                      class="baroque-terms"
                      style="
                        margin: 0;
                        padding: 50px;
                        color: #a9b6c7;
                        font-size: 11px;
                        text-align: center;
                      "
                    >
                      <strong
                        >Built upon a strict platform of assured confidentiality
                        and security to protect our members</strong
                      >
                      <p style="margin: 10px 0; padding: 0">
                        This message (and any attachments) contains information
                        that is confidential, privileged and/or protected from
                        disclosure under applicable law and is intended for the
                        exclusive use of the party named on the message.
                      </p>
                      <p style="margin: 10px 0; padding: 0">
                        If you are not the intended recipient, disclosure,
                        copying, use or distribution of the information included
                        in this message (and any attachments) is not authorized
                        and may be unlawful. If you have received this document
                        in error, please notify the sender.
                      </p>
                    </td>
                  </tr>
                  <tr style="margin: 0; padding: 0">
                    <td
                      colspan="2"
                      valign="middle"
                      style="margin: 0; padding: 0"
                    >
                      <div
                        class="line"
                        style="
                          width: 90%;
                          height: 1px;
                          background: #dde3eb;
                          margin: 0 auto 50px;
                        "
                      ></div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
