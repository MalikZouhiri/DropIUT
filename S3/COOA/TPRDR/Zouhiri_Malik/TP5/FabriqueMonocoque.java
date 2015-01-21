
public class FabriqueMonocoque implements FabriqueVoilier{

	public void factoryMethod(String nom, String classeDuRhum) {
		
		
		switch (classeDuRhum)
       	{
		case "RHUM": /*Pas fait*/break;
       	case "CLASS40" : new CLASS40(nom); break;
       	case "IMOCA": 	new IMOCA(nom);  break;
       }
	}

}
