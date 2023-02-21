Select Field_List.Field_ID, Field_List.acres, Linemen.Field_ID, Linemen.Worker_name 
from Field_List 
left join Linemen on 
Field_List.Field_ID = Linemen.Field_ID;

Select Field_List.Field_ID, Field_List.acres, Irrigator.Field_ID, Irrigator.Worker_name 
from Field_List 
left join Irrigator on 
Field_List.Field_ID = Irrigator.Field_ID;

Select Field_List.Field_ID, Field_List.acres, Tractor_Drivers.Field_ID, Tractor_Drivers.Worker_name 
from Field_List 
left join Tractor_Drivers on 
Field_List.Field_ID = Tractor_Drivers.Field_ID;

Select Field_List.Field_ID, Field_List.acres, Field_List.Crop_ID, Crops.Crop_ID, Crops.Crop_name
from Field_List 
left join Crops on 
Field_List.Crop_ID = Crops.Crop_ID;

Select Tractor_Drivers.Equipment_num,Tractor_Drivers.Worker_name, Tractors.Tractor_num, Tractors.Tractor_des, Tractors.Equipment_num  
from  Tractor_Drivers
left join Tractors on 
Tractor_Drivers.Tractor_num = Tractors.Tractor_num;

call Get_Irrigator(1);
call Get_Linemen(1);
call Get_TractorDriver(2);

call Get_fieldWorkers(1);
call Get_CropFields(3);


