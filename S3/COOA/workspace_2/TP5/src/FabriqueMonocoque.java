
public class FabriqueMonocoque implements FabriqueVoilier{

	public Voilier factoryMethod(String nom, String classeDuRhum) {
		
		
		switch (classeDuRhum)
       	{
		case "RHUM": return new RHUM_Mono(nom);
       	case "CLASS40" : return new CLASS40(nom);
       	case "IMOCA": return new IMOCA(nom);
       }
		return null;
	}

}
