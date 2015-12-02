package com.ga.repository.impl;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.ga.persistance.entity.Area;
import com.ga.persistance.mapper.impl.AreaMapper;
import com.ga.persistance.mapper.impl.UserMapperImpl;
import com.ga.repository.IAreaService;

public class AreaServiceImpl implements IAreaService{
	
	@Autowired
	AreaMapper areaMapper;

	@Override
	public List<String> getAreaByName(String areaName) {
		// TODO Auto-generated method stub
		List<String> result;
		List<Area> areaList = areaMapper.getAreaByName(areaName);
		System.out.println(areaList);
		int index = 0;
		/*for(Area a : areaList){
			string areaNameRes = a[index+1];
			
		}*/
		return null;
	}

}
