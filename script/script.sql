

select dr.id_regime,(select nom from plat where id = id_plat_matin) matin,(select nom from plat where id = id_plat_midi) midi,
(select nom from plat where id = id_plat_soir) soir,(select niveau from entrainement where id = id_entrainement)
from detail_regime dr 
where id_regime = 24; 

select ae.id_entrainement,a.nom,ae.quantite from activite_entrainement ae join activite a on ae.id_activite =a.id where ae.id_entrainement = 1; 