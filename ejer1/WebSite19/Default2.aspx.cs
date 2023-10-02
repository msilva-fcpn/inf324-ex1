using System;
using System.Collections.Generic;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Default2 : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string usuario, contrasenia;
        usuario = Request.QueryString["usuario"];
        contrasenia = Request.QueryString["contrasenia"];
        Response.Write(usuario);
        Response.Write("<br/>");
        Response.Write(contrasenia);
        //responde.redirect("ruta");
    }
}
