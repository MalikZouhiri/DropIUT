<?xml version="1.0" encoding="ISO-8859"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output encoding="ISO-8859" method="html"/>
	<xsl:template match="films">
		<html>
			<body>
					<h2 align="left">Films appartenant à <xsl:value-of select="@proprietaire"/></h2>
					<table border="1">
						<xsl:apply-templates select="film">
							<xsl:sort select ="annee" data-type="number"/>
							<xsl:sort select="titre" data-type="text"/>
						</xsl:apply-templates>
					</table>		
					<xsl:value-of select="concat(@proprietaire, ' a recueilli ', count(film), ' films')"/>
			</body>
		</html>
	</xsl:template>
	
	<xsl:template match="film">
		<tr>
			<td valign="top" width="20%">
				<xsl:value-of select="concat(titre,' - ')"/>
				<i> <xsl:value-of select="realisateur"/></i>
			</td>
			<td valign="top" width="20%">
				<xsl:value-of select="concat(@annee,' - ')"/>
				<i> <xsl:value-of select="@nationalite"/></i>
			</td>
			<td valign="top" width="20%">
				<xsl:apply-templates select="acteurs/acteur"/>
			</td>
			<td valign="top" width="20%">
				<xsl:value-of select="concat('Résumé : ', resume)"/>
			</td>
		</tr>
	</xsl:template>
	
	<xsl:template match="acteurs/acteur">
		<xsl:value-of select="concat(position(), '/',last(), ' - ', .)"/> <!-- Le point = l'acteur (valeur dans le noeud-->
		<xsl:if test="position()!=last()"> , </xsl:if>
	</xsl:template>
</xsl:stylesheet>