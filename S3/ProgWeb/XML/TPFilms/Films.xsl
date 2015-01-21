<?xml version="1.0" encoding="ISO-8859"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:output encoding="ISO-8859" method="html"/>
	
	<xsl:template match="films">
		<html>
			<body bgcolor="#fffff99">
				<font color="#333399">
					<h1 align="left">Films</h1>
						<xsl:apply-templates select="film"/>
				</font>
			</body>
		</html>
	</xsl:template>
	
	<!--Template Ex2a-->
	<xsl:template match="film[@annee][@nationalite]">
		<h2 align="left">
		<p>		<xsl:value-of select="titre"/>,
				<xsl:value-of select="@annee"/>,
				<xsl:value-of select="@nationalite"/>
				<p>		<xsl:apply-templates select="image"/></p>
		</p>
		</h2>
		<h3>
		<p>		<xsl:apply-templates select="realisateur"/></p>
		<p>		<xsl:apply-templates select="acteurs"/></p>
		<p> L'histoire :
			<font color="#009900"><xsl:apply-templates select="resume"/> </font>
		</p>
		</h3>
	</xsl:template>
 	
	<!--Template Ex2b-->
	<xsl:template match="image[@adresse]">
		<img SRC="{@adresse}" height="100"/>
	</xsl:template>
	
	<!--Template Ex2b-->
	<xsl:template match="resume/nomGeo">
		<font color="#cc0000"><xsl:value-of select="."/></font>
	</xsl:template>
	
	
</xsl:stylesheet>