package com.ga.persistance.mapper.impl;

import java.util.ArrayList;
import java.util.List;

import org.hibernate.Query;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import com.ga.persistance.entity.Area;
import com.ga.persistance.entity.CommentHistory;
import com.ga.persistance.mapper.IAreaMapper;

@Repository
public class AreaMapper implements IAreaMapper {

	@Autowired
    SessionFactory sessionFactory;
	
	@Override
	public Area getAreaById(String areaId) {
		// TODO Auto-generated method stub
		
		return null;
	}

	public List<Area> getAreaByName(String areaName){
		Session session = sessionFactory.openSession();
	    session.beginTransaction();
		List<Area> areaList = new ArrayList<Area>();
		String hql = "FROM Area where AreaName ='" + areaName + "' or zip ='" + areaName + "'";
        Query query = session.createQuery(hql);
        areaList = query.list();
        System.out.println(areaList);
        return areaList;
		
	}
}
