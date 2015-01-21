import javax.xml.parsers.*;

public class ParseurValidant {
    public static void main(String[] args) throws Exception {
            DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
            factory.setValidating(true);
            DocumentBuilder parser = factory.newDocumentBuilder();
            parser.parse(args[0]);
        } // main () 
	} // classe ParseurValidant