<?xml version="1.0" encoding="ISO-8859"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output encoding="ISO-8859" method="html"/>
	
	<xsl:template match="journal">
		<html>
			<body>
				<xsl:apply-templates select="logo"/>
				<h1><xsl:value-of select="@nom"/></h1>
				<table border="1">
					<tr>
						<td width="20%">
							<xsl:apply-templates select="rubrique" mode="sommaire"/>
						</td>
						<td width="80%">
							<xsl:apply-templates select="rubrique" mode="contenu"/>
						</td>
					</tr>
				</table>
			</body>
		</html>
	</xsl:template>
	
	
	
	<xsl:template match="rubrique" mode="sommaire">
		<u><xsl:value-of select="concat(position(), '-', @theme)"/></u>
		<br/>
		<br/>
		<xsl:apply-templates select="article" mode="sommaire">
			<xsl:with-param name="posRub" select="position()"/>
		</xsl:apply-templates>
	</xsl:template>
	
	
	<xsl:template match="rubrique" mode="contenu">
		<a id="{@theme}"/>
		<h3><xsl:value-of select="concat('Rubrique ',position(), ' : ', @theme)"/></h3><hr/>
		<xsl:apply-templates select="article" mode="contenu"/>
		<a href="#{@theme}"> Retour début rubrique <xsl:value-of select="@theme"/></a>
	</xsl:template>
	
	
	<xsl:template match="article" mode="contenu">
		<!-- À continuer ICI -->
		<xsl:value-of select="contenu"/><br/>
	</xsl:template>
	
	
	<xsl:template match="article" mode="sommaire">
		<xsl:param name="posRub"/>
			<xsl:value-of select="concat($posRub, '-', position(), ' ', titre)"/>
			<br/>
			<br/>
	</xsl:template>
	
	
	<xsl:template match="logo[@adresse]">
		<img SRC="{@adresse}" height="100"/>
	</xsl:template>
	
</xsl:stylesheet>