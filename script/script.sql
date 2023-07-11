

select dr.id_regime,(select nom from plat where id = id_plat_matin) matin,(select nom from plat where id = id_plat_midi) midi,
(select nom from plat where id = id_plat_soir) id_plat_soir
from detail_regime dr 
where id_regime = 24; 