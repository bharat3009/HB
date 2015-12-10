package com.ga.repository.impl;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.ga.persistance.entity.Area;
import com.ga.persistance.mapper.impl.AreaMapper;
import com.ga.persistance.mapper.impl.UserMapperImpl;
import com.ga.repository.IAreaService;

@Service
@Transactional
public class AreaServiceImpl implements IAreaService{
	
	@Autowired
	AreaMapper areaMapper;

	@Override
	public List<String> getAreaByName(String areaName) {
		// TODO Auto-generated method stub
		List<String> result = new ArrayList<String>();
		List<Area> areaList = areaMapper.getAreaByName(areaName);
		System.out.println(areaList);
		int index = 0;
		for(Area a : areaList){
			System.out.println(a.getAreaName());
			String x = a.getAreaName() + ", " + a.getState() + ", " + a.getCountry() + ", " + a.getZip() ;
			System.out.println(x);
			result.add(x);
		}
		System.out.println(result);
		
		return result;
	}

}
