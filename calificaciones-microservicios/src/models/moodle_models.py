from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy import Column, Integer, Float, String, Text, DECIMAL

BaseMoodle = declarative_base()

class GradeMoodle(BaseMoodle):
    __tablename__ = 'grade_grades'

    id = Column(Integer, primary_key=True)
    itemid = Column(Integer)
    userid = Column(Integer)
    rawgrade = Column(DECIMAL(10,5))
    rawgrademax = Column(DECIMAL(10,5))
    rawgrademin = Column(DECIMAL(10,5))
    rawscaleid = Column(Integer)
    usermodified = Column(Integer)
    finalgrade = Column(DECIMAL(10,5))
    hidden = Column(Integer)
    locked = Column(Integer)
    locktime = Column(Integer)
    exported = Column(Integer)
    overridden = Column(Integer)
    excluded = Column(Integer)
    feedback = Column(Text)
    feedbackformat = Column(Integer)
    information = Column(Text)
    informationformat = Column(Integer)
    timecreated = Column(Integer)
    aggregationstatus = Column(String(20))
    aggregationweight = Column(DECIMAL(10,5))
    deductedmark = Column(DECIMAL(10,5))
