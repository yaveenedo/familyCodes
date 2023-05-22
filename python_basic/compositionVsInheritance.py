def compositionVsInheritance():
    print('Object Oriented Programming (OOP) - Inheritance')

    class Monster:
        def __init__(self, subject):
            self.subject = subject

        def eat(self):
            print(f'{self.subject} ate')

        def sleep(self):
            print(f'{self.subject} sleep')

    class FlyingMonster(Monster):
        def fly(self):
            print(f'{self.subject} flew')

    class SwimmingMonster(Monster):
        def swim(self):
            print(f'{self.subject} swam')

    bear = Monster('bear')
    bear.eat()
    bear.sleep()

    eagle = FlyingMonster('eagle')
    eagle.eat()
    eagle.sleep()
    eagle.fly()

    crocodile = SwimmingMonster('crocodile')
    crocodile.eat()
    crocodile.sleep()
    crocodile.swim()

    # ===============================================================================================================================================================================

    class FlyingSwimmingMonsterV1(Monster):
        def fly(self):
            print(f'{self.subject} flew')

        def swim(self):
            print(f'{self.subject} swam')

    class FlyingSwimmingMonsterV2(FlyingMonster):
        def swim(self):
            print(f'{self.subject} swam')

    class FlyingSwimmingMonsterV3(SwimmingMonster):
        def fly(self):
            print(f'{self.subject} flew')

    agus = FlyingSwimmingMonsterV1('agus')
    agus.eat()
    agus.sleep()
    agus.swim()
    agus.fly()

    ari = FlyingSwimmingMonsterV2('ari')
    ari.eat()
    ari.sleep()
    ari.swim()
    ari.fly()

    anton = FlyingSwimmingMonsterV3('anton')
    anton.eat()
    anton.sleep()
    anton.swim()
    anton.fly()

    print('=================================================================================================')
    print('Functional Programming - Composition')

    eater = lambda subject: {'eat': lambda: print(f'{subject.get("subject")} ate')}
    sleeper = lambda subject: {'sleep': lambda: print(f'{subject.get("subject")} slept')}
    flyer = lambda subject: {'fly': lambda: print(f'{subject.get("subject")} flew')}
    swimmer = lambda subject: {'swim': lambda: print(f'{subject.get("subject")} swam')}

    createMonster = lambda subject: {'name': subject, **eater(subject={'subject': subject}), **sleeper(subject={'subject': subject})}
    createFlyingMonster = lambda subject: {'name': subject, **createMonster(subject), **flyer(subject={'subject': subject})}
    createSwimmingMonster = lambda subject: {'name': subject, **createMonster(subject), **swimmer(subject={'subject': subject})}
    createFlyingSwimmingMonster = lambda subject: {'name': subject, **createMonster(subject), **flyer(subject={'subject': subject}), **swimmer(subject={'subject': subject})}

    tiger = createMonster('tiger')
    tiger.get('eat')()
    tiger.get('sleep')()

    owl = createFlyingMonster('owl')
    owl.get('eat')()
    owl.get('sleep')()
    owl.get('fly')()

    dolphin = createSwimmingMonster('dolphin')
    dolphin.get('eat')()
    dolphin.get('sleep')()
    dolphin.get('swim')()

    udin = createFlyingSwimmingMonster('udin')
    udin.get('eat')()
    udin.get('sleep')()
    udin.get('fly')()
    udin.get('swim')()


if __name__ == '__main__':
    compositionVsInheritance()
