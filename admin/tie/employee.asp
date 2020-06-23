<%
Dim Conn
Dim Rs

Set Conn = Server.CreateObject("ADODB.Connection")
Set RS = Server.CreateObject("ADODB.RecordSet")
Conn.Open "Provider=Microsoft.Jet.OLEDB.4.0 ; Data Source="&Server.MapPath("../datab/fuarci.mdb")

%>