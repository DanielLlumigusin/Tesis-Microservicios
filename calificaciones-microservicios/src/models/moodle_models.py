from sqlalchemy import Column, Integer, DECIMAL, String, Text, Boolean
from sqlalchemy.orm import declarative_base

BaseMoodle = declarative_base()

class GradeMoodle(BaseMoodle):
    __tablename__ = 'grade_grades'

    id = Column(Integer, primary_key=True)
    itemid = Column(Integer)
    userid = Column(Integer)
    rawgrade = Column(DECIMAL(10,5))
    rawgrademax = Column(DECIMAL(10,5))
    rawgrademin = Column(DECIMAL(10,5))
    rawscaleid = Column(Integer, nullable=True)
    usermodified = Column(Integer)
    finalgrade = Column(DECIMAL(10,5))
    hidden = Column(Boolean)
    locked = Column(Boolean)
    locktime = Column(Integer, nullable=True)
    exported = Column(Boolean)
    overridden = Column(Boolean)
    excluded = Column(Boolean)
    feedback = Column(Text, nullable=True)
    feedbackformat = Column(Integer)
    information = Column(Text, nullable=True)
    informationformat = Column(Integer)
    timecreated = Column(Integer)
    timemodified = Column(Integer, nullable=True)
    aggregationstatus = Column(String(20))
    aggregationweight = Column(DECIMAL(10,5))
    deductedmark = Column(DECIMAL(10,5))

    def to_dict(self):
        return {c.name: getattr(self, c.name) for c in self.__table__.columns}
